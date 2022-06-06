<?php

    session_start();
    include '../db_conn.php';
    include '../check_input.php';
    include '../setup.php';

    
    $UserName = test_input($_POST['user_name']);
    $Email = test_input($_POST['email']);
    $ClearPassword = test_input($_POST['password']);
    
    $HshPassword = password_hash($ClearPassword, PASSWORD_DEFAULT);
    if(!is_taken($UserName,$User_name_col, $User_table, $conn)&&!is_taken($Email,$User_email_col, $User_table, $conn)){
        signup_insert($User_table,$User_name_col, $User_email_col, $User_password_col,$UserName,$Email,$HshPassword,$conn);
        $_SESSION['UserName'] = $UserName;
        header("Location: ../after_log_content/after_log.php");
    }
    else{
        header("Location: signup_page.php?errorId=1");
    }
        //echo $numedb;

?>
