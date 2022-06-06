<!DOCTYPE html>
<html>
    <head>
        <script scr="../script.js"></script>
        <script>
            // function verPasiuni(obj){
            //     let lastChar = "";
            //     for (let x of obj.value){
            //         lastChar = x;
            //     }
            //     console.log(lastChar);
            // }
        </script>
    </head>
    <div class="signup_container">
        <form name = "signupForm" class="signup_form" method="POST" action = "admin_aplication_action.php" style="text-align: -webkit-center">
            <h2>Tell us why</h2>
            <!-- <input id = "Pasiuni" type = "text" name="pasiuni" class = "form-control" style = "width : 250px" placeholder="Tell us your passions" onkeydown="verPasiuni(document.getElementById('Pasiuni'))"><br> -->
            <!-- <input id = "Argument" type = "text" name="argument" class = "form-control" style = "width : 250px" rows = "" placeholder="Why do you want to become an admin"><br> -->
            <textarea id = "Argument" name="argument" rows="5" class = "form-control" style = "width : 250px"></textarea><br>
            <input type = "submit" class="btn btn-default">
        </form>
    </div>
</html>