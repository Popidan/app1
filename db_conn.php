<?php
$username ="root";
$password = "";
$servername = "localhost";
$numedb = "app1";

$conn = new mysqli($servername, $username, $password, $numedb);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>