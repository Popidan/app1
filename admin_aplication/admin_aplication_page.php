<?php
    session_start();
    include '../db_conn.php';
    include '../setup.php';
    include '../check_input.php';
    if(isset($_GET['er'])){
        if ($_GET['er']==0){
            echo"<script>alert('You already have an aplication. It is being reviewed')</script>";

        }
        elseif($_GET['er']==2){
            echo"<script>alert('You already have an aplication. It had been denied')</script>";

        }
        elseif($_GET['er']==1){
            echo"<script>alert('You already have an aplication. You are already an admin')</script>";
            
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Aplication</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>
    <body>
        <?php
            include '../headers/header.php';
            include 'admin_aplication_view.php';
        ?>
        
    </body>
</html>