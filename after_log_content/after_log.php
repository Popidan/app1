<?php
    session_start();
    include '../db_conn.php';
    include '../check_input.php';
    include '../setup.php';
    
    // include 'phpChart_Lite/conf.php';
    if (!isset($_SESSION['UserName'])){
        header("Location: ../index.php");
        die;
    }
    
    $userName = $_SESSION['UserName'];

    $row = get_user_data($userName, $User_table, $User_name_col, $conn);
    $_SESSION['userInfo'] = $row;
    $admin = is_admin($row, $User_admin_col);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>
    <body>
    <?php 
        if($admin == 0){
            include '../headers/header.php';
            include 'nonadmin_content.php';
        }
        else{
            include '../headers/admin_header.php';
        }

    ?>
    

    </body>
</html>