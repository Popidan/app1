<?php
session_start();
include '../db_conn.php';
include '../check_input.php';
include '../setup.php';
if(!isset($_SESSION['userInfo'])){
    header("Location: ../index.php");
    die;
}
elseif(is_admin($_SESSION['userInfo'], $User_admin_col)==0){
    header("Location: ../index.php");
    die;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Requests</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
    </head>
    <body>
        <?php
            include '../headers/admin_header.php';
            include 'admin_requests_view.php';
        ?>

    </body>
</html>