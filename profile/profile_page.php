<?php
    session_start();
    include '../check_input.php';
    include '../db_conn.php';
    include '../setup.php';
    if(!isset($_SESSION['userInfo'])){
        header("Location: ../index.php");
        die;
    }
    $userInfo = $_SESSION['userInfo'];
    $userName = $userInfo['name'];
    $userEmail = $userInfo['email'];
    $userAdmin = $userInfo['admin'];
    $userId = $userInfo['id_user'];
    $photoPath = "photos/generic_pfp.png";
    $alterNamejpeg = "photos/" . $userId . ".jpeg";
    $alterNamejpg = "photos/" . $userId . ".jpg";
    $alterNamepng = "photos/" . $userId . ".png";
    echo passthru("python ../python_scripts/personal_plot.py $userName"); 
    // $alterNamejpeg = "photos/" . $userId . ".jpeg";
    if (file_exists($alterNamejpeg)){
        $photoPath = $alterNamejpeg;
        
    }
    elseif(file_exists($alterNamejpeg)){
        $photoPath = $alterNamejpg;
    }
    elseif(file_exists($alterNamepng)){
        $photoPath = $alterNamepng;
    }
    $pltPath = "plots/".$userName.".png";
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $userName?>'s profile</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>
    <body>
        <?php
            if ($userAdmin == 1) include '../headers/admin_header.php';
            else include '../headers/admin_header.php';
        ?>
        <div style = "width : 100%">
            <div style = "width : 145px; float:left">
                
                <img src = <?=$photoPath?> style = "border-radius : 200px; width:145px; height:145px" onclick="window.location.replace('add_photo_page.php');">
            </div>
            <div class = "cp">
                    <img src = <?=$pltPath?> width="600px">
            </div>
            <div style = "width : 400px">
                <p><?=$userName?></p>
                <br>
                <p><?=$userEmail?></p>
                
            </div>
        </div>
    </body>
</html>