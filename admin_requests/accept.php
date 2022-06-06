<?php
session_start();
include '../db_conn.php';
include '../check_input.php';
include '../setup.php';
$userId = $_GET["userId"];
$sql = "UPDATE admin_requests SET valid = 1 WHERE user_id = $userId";
$sql2 = "UPDATE users SET admin = 1 WHERE id_user = $userId";
$conn->query($sql);
$conn->query($sql2);
header("Location: admin_requests_page.php");
?>