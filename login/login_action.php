<?php
session_start();
include '../db_conn.php';
include '../check_input.php';
include '../setup.php';


$UserName = test_input($_POST['user_name']);
$ClearPassword = test_input($_POST['password']);

if(is_taken($UserName,$User_name_col, $User_table, $conn)){
    $HshPassword = get_password($UserName, $User_name_col, $User_password_col, $User_table, $conn);
    $ver = password_verify($ClearPassword, $HshPassword);
    if ($ver){
        $_SESSION['UserName'] = $UserName;
        log_db($UserName, $Log_user_col, $Log_date_col, $Log_table,$conn);

        header("Location: ../after_log_content/after_log.php");
    }
    else{
        header("Location: login_page.php?errorId=2");
        
    }
}
else{
    header("Location: login_page.php?errorId=1");
}
?>