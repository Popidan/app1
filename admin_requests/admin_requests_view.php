<?php
    // include '../db_conn.php';
    // include '../setup.php';
    // include '../check_input.php';
    $nRows = get_requests($conn)->num_rows;
?>

<table class="table">
    <tr>
        <th>
            User Id
        </th>
        <th>
            User Name
        </th>
        <th>
            User Mail
        </th>
        <th></th>
        <th>
            Action
        </th>
        <th></th>
    </tr>
    <?php
        $result = get_requests($conn);
        for ($i=0; $i<$nRows; $i++){
            $row =  $result->fetch_assoc();
            $userId = $row['user_id'];
            $userText = $row['text'];
            $userInfo = get_user_data($userId, $User_table, $User_id_col, $conn);
            $userName = $userInfo['name'];
            $userEmail = $userInfo['email'];
            echo "
                <tr>
                    <td>
                        $userId
                    </td>
                    <td>
                        $userName
                    </td>
                    <td>
                        $userEmail                    
                    </td>
                   
                    <td>
                        <a href = 'view_aplication.php?userText=$userText'>view aplication</a>
                          
                        <a href = 'accept.php?userId=$userId'><span class='glyphicon glyphicon-ok'></span></a>
                          
                        <a href = 'reject.php?userId=$userId'><span class='glyphicon glyphicon-remove'></span></a>
                    </td>
                   
                </tr>
            ";
        }
    ?>  
</table>
