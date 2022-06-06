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
        $sql = "INSERT INTO $User_table ($col_name, $col_email , $col_password) VALUES ('$UserName', '$Email', '$HshPassword')";
        $conn->query($sql);
        
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function log_db($UserName, $col_name, $col_log_date, $log_tab,$conn){
        //	Etc/GMT+2
        date_default_timezone_set("Etc/GMT-3");
        $data_ora = date("y-m-d H:i:s");
        $sql = "INSERT INTO $log_tab ($col_name, $col_log_date) VALUES ('$UserName', '$data_ora')";
        $conn->query($sql);
    }
    function get_user_data($UserName, $UserTable, $UserCol, $conn){
        $s = "SELECT * FROM $UserTable WHERE $UserCol = '$UserName'";
        $r = mysqli_query($conn, $s);
        $row = $r->fetch_assoc();
        return $row;
    }
    
    function is_admin($row, $adminCol){
        if (!isset($row[$adminCol])){
            return 0;
        }
        return $row[$adminCol];        
    }
    function check_previous_apl($UserId ,$con){
        $s = "SELECT * FROM admin_requests WHERE user_id = $UserId";
        $r = mysqli_query($con, $s);
        $row = $r->fetch_assoc();
        if ($r->num_rows > 0) return $row['valid'];
        return 4;
        
    }
    function admin_insert($UserId, $Text, $conn){
        if (check_previous_apl($UserId, $conn) == 4){
            $sql = "INSERT INTO admin_requests (user_id, text , valid) VALUES ('$UserId', '$Text', 0)";
            $conn->query($sql);
            return 4;
        }
        return check_previous_apl($UserId, $conn);
        
    }
    function get_requests($conn){
        $s = "SELECT * FROM admin_requests WHERE valid = 0";
        $r = mysqli_query($conn, $s);
        return $r;
    }
    
?>