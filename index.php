<?php
require 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>
    <div id ="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
            <div class="underline-title"></div>
            <form method="POST" class="form" action="cek_login.php">
                <label for="user-username" style="padding-top:13px">&nbsp;Username</label>
                <input id="user-username" class="form-content" type="text" name="username" required />
            <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
            <div class="form-border"></div>
                <a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
                <button id="submit-btn" type="submit" class="btn btn-success" name="login">LOGIN</button>
            </form>
        </div>
    </div>
</html>