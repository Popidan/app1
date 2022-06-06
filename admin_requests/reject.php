<?php
session_start();
include '../db_conn.php';
include '../check_input.php';
include '../setup.php';
$userId = $_GET["userId"];
$sql = "UPDATE admin_requests SET valid = 2 WHERE user_id = $userId";
$conn->query($sql);
header("Location: admin_requests_page.php");
?>