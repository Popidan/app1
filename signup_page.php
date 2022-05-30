<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
        <?php include'header.php' ?>
        <?php include'signup_form_view.php'; 
            if($_GET['errorId'] == 1){
                echo "<script>alert('Username or email already in use')</script>";
            }
        ?>
    </body>
</html>