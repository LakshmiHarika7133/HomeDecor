<?php
    include 'connection.php';

    if(isset($_POST['submit-btn'])){
        $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $name = mysqli_real_escape_string($conn, $filter_name);

        $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
        $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

        $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE u_email = '$email'") or die('query failed');

        if(mysqli_num_rows($select_user)>0) {
            $message[] = 'user already exist';
        }else{
            if($password != $cpassword){
                $message[] = 'wrong password';
            }else{
                mysqli_query($conn, "INSERT INTO `users` (`u_name`, `u_email`, `password`) VALUES ('$name', '$email', '$password')") or die('query failed');
                $message[] = 'Registered successfully';
                header('localhost:login.php');
            }
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
    <title>Register Page</title>
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
        <form method="post">
            <h1>Register Now</h1>
            <input type="text" name="name" placeholder="Enter your Name" required>
            <input type="email" name="email" placeholder="Enter your Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" required>
            <input type="submit" name="submit-btn" value = "Register Now" class="btn">
            <p>already have an account? <a href = "login.php">Login</a></p>
        </form>
    </section>
</body>
</html>