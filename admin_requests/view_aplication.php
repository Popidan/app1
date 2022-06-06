<?php
session_start();
include '../db_conn.php';
include '../check_input.php';
include '../setup.php';
$userText = $_GET["userText"];


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
            echo $userText;
        ?>

    </body>
</html>