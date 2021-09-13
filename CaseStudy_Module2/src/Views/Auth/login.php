<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .header {
            color: darkslateblue;
            text-align: center;
            font-size: 30px;
        }

        form {
            position: relative;
            margin: auto;
            width: 400px;
            top: 200px;
        }

        #user, #pass {
            height: 68px;
            width: 350px;
            margin: 5px;
            font-size: 18px;
            border: 0;
            background-color: antiquewhite;
            padding: 0 20px 0 30px;
        }

        #checkbox {
            text-align: left;
        }

        #login {
            margin: 5px;
            width: 400px;
            height: 68px;
            background-color: #827ffe;
            border: 0;
            color: white;
            font-size: 20px;
        }

        #check {
            outline: 1px solid blue;
            width: 20px;
            height: 20px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        #forgot {
            text-decoration: none;
        }

        input {
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="header">
        <h3>LOGIN</h3>
    </div>
    <table>
        <tr>
            <td colspan="2"><input type="text" id="user" name="email" placeholder="email"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="password" id="pass" name="password" placeholder="password"></td>
        </tr>
        <tr>
            <td><input type="checkbox" id="check"> Remember me</td>
            <td style="text-align: right"><a href="#" id="forgot">Forgot?</a></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" id="login" value="LOGIN"></td>
        </tr>
    </table>

</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (isset($_POST['login'])) {
        if ($_POST['email'] == null) {
            echo('Please enter your username!<br/>');
        } else {
            $username = $_POST['email'];
        }
        if ($_POST['password'] == null) {

            echo('Please enter your username!<br/>');
        } else {
            $password = $_POST['password'];
        }
//        if ($email == 'admin' && $password == "admin") {
//            include "index.php";
//        } else {
//            echo "<h3><span style='color:red'>Login Error</span></h3>";
//        }
    }
}
?>