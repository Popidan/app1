<!DOCTYPE html>
<html>
    <div class="login_container">
        <form class="login_form" method="POST" action = "login_action.php" style="text-align: -webkit-center">
            <h2>Log in</h2>
            <input type = "text" name="user_name" class = "form-control" style = "width : 250px" required><br>
            <input type = "password" name="password" class = "form-control" style = "width : 250px" required><br>
            <input type = "submit" class="btn btn-default">
        </form>
        <a href = "signup_page.php?errorId=0"  class="LogSig" style="text-align: -webkit-center">Sign Up</a>
    </div>
</html>