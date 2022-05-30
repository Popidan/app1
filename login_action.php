<?php
session_start();
include 'db_con.php';
include 'check_input.php';
include 'setup.php';


$UserName = test_input($_POST['user_name']);
$ClearPassword = test_input($_POST['password']);

if(is_taken($UserName,$User_name_col, $User_table, $conn)){
    $HshPassword = get_password($UserName, $User_name_col, $User_password_col, $User_table, $conn);
    $ver = password_verify($ClearPassword, $HshPassword);
    if ($ver){
        header("Location: after_log.php");
    }
    else{
        header("Location: login_page.php?errorId=2");
        //echo $HshPassword;
    }
}
else{
    header("Location: login_page.php?errorId=1");
}
?>