<?php
include 'connection.php';
session_start();
// $admin_id = $_SESSION['admin_name'];

// if(!isset($admin_id)){
//     header('location:login.php');
// }
// if(!isset($_POST['logout'])){
//     session_destroy();
//     header('location:login.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--box icon link-->
    <link href = 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type = "text/css" href = "style.css">
    <title>Admin Panel</title>
</head>
<body>
    <?php include 'admin_header.php' ?>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
