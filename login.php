<?php
include 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE u_email = '" . $email . "' AND password = '" . $password . "'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_array($result);

        if ($row) {
            if ($row['u_type'] == 'user') {
                header('location:index.php');
            } else if ($row['u_type'] == 'admin') {
                header('location:admin_panel.php');
            } else {
                $message[] = 'Incorrect email or password';
            }
        } else {
            $message[] = 'Incorrect email or password';
        }
    } else {
        $message[] = 'Error in database query: ' . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--box icon link-->
    <link href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type = "text/css" href = "style.css">
    <title>Login Page</title>
</head>
<body>
    
    <section class="form-container">
    <?php
        if(isset($message)) {
            foreach ($message as $message) {
                echo '
                <div class = "message">
                    <span>'.$message.'</span>
                    <i class = "bi bi-x-circle" onclick = "this.parentElement.remove()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                    <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                  </svg></i>
                </div>
                ';
            }
        }
    ?>
        <form action="" method="post">
            <h1>Login Now</h1>
            <div class="input-field">
                <label>your email</label><br>
                <input type="email" name="email" placeholder="Enter your Email" required>
            </div>

            <div class="input-field">
                <label>password</label><br>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>

            
            <input type="submit" name="submit-btn" value = "Login" class="btn">
            <p>Do not have an account? <a href = "register.php">Register</a></p>
        </form>
    </section>
</body>
</html>