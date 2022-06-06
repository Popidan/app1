<?php
    session_start();
    include '../db_conn.php';
    include '../setup.php';
    include '../check_input.php';
    $userId = $_SESSION['userInfo'][$User_id_col];
    $userText = $_POST['argument'];

    $er = admin_insert($userId, $userText, $conn);
    if($er==4){
        header("Location: ../after_log_content/after_log.php");
    }
    else {
        header("Location: admin_aplication_page.php?er=$er");
    }

    

?>