<?php
    function is_taken($val, $col, $tab, $con){
        $s = "SELECT * FROM $tab WHERE $col = '$val'";
        $r = mysqli_query($con, $s);
        if ($r->num_rows > 0) return true;
        return false;
    }
    function get_password($val, $col, $col_password, $tab, $con){
        $s = "SELECT * FROM $tab WHERE $col = '$val'";
        $r = mysqli_query($con, $s);
        $row = $r->fetch_assoc();
        return $row[$col_password];
    }
    function signup_insert($User_table, $col_name, $col_email, $col_password, $UserName, $Email, $HshPassword, $conn){
        $sql = "INSERT INTO $User_table (`name`, `email`, `password`) VALUES ('$UserName', '$Email', '$HshPassword')";
        $conn->query($sql);
        
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>