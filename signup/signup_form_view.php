<!DOCTYPE html>
<html>
    <head>
        <script scr="../script.js"></script>
    </head>
    <div class="signup_container">
        <form name = "signupForm" class="signup_form" method="POST" action = "signup_action.php" style="text-align: -webkit-center">
            <h2>Sign Up</h2>
            <input id = "UserName" type = "text" name="user_name" class = "form-control" style = "width : 250px" placeholder="User name" minlength="3" required><br>
            <input type = "email" name="email" class = "form-control" style = "width : 250px" placeholder="Email" required><br>
            <input type = "password" name="password" class = "form-control" style = "width : 250px" placeholder="Password" minlength="3" required><br>
            <input type = "submit" class="btn btn-default">
        </form>
        <a href = "../index.php" style="text-align: -webkit-center" class="LogSig">Log In</a>
    </div>
</html>