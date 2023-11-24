<?php
// admin_header.php

// Start the session (if not already started)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if admin_name is set in the session before accessing it
$adminName = isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : '';
$adminEmail = isset($_SESSION['admin_email']) ? $_SESSION['admin_email'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--box icon link-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type = "text/css" href = "style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div>
            <a href="admin_panel.php" class="logo"><img src="img"></a>
            <nav class="navbar">
                <a href="admin_panel.php">HOME</a>
                <a href="admin_product.php">PRODUCTS</a>
                <a href="admin_order.php">ORDERS</a>
                <a href="admin_user.php">USERS</a>
            </nav>
            <div class="icons" id="main" class="main">
            <i class="bi bi-person" id="user-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
</svg></i>

            <i class="bi bi-list" id="menu-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            </svg></i>  
            </div>
            <div class="user-box">
                <!-- <p>username: <span><?php echo $adminName; ?></span></p>
                <p>Email: <span><?php echo $adminEmail; ?></span></p> -->
                <form method="post">
                    <button type="submit" onclick="fixedNavbar()" class="logout-btn">logout</button>
                </form>
            </div>
        </div>

    </header>
    <div class="banner">
        <div class="detail">
            <h1>admin dashboard</h1>
            <p>Only admin uses this dashboard</p>
        </div>
    </div>
    <div class="line">
            
        </div>
        <script type="text/javascript" src="script.js"></script>
</body>
</html>
