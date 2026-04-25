<?php
session_start();
 
if (isset($_POST['submit'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    if (isset($_SESSION['users'][$username]) &&
        $_SESSION['users'][$username]['password'] == $password) {
 
        $_SESSION['current_user'] = $username;
 
        header("Location: dashboard.php");
        exit();
 
    } else {
        echo "Invalid username or password!";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="navBarParent">
<div>
<h1>X Company</h1>
</div>
<div class="links">
<a href="index.php">Home</a>
<a href="login.php">Login</a>
<a href="registration.php">Registration</a>
</div>
</div>
 
<div class="content">
   <fieldset>
    <legend>Login</legend>
<form method="post">
<table>
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
</table>
 
 <table>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
</table>
<hr>
 
 <input type="submit" value="Submit" name="submit" />
<a href="forgotPassword.php">Forgot password?</a>
</form>
</fieldset>
 
        </div>
 
 <footer>
        <p>Copyright © 2017</p>
</footer>
</div>
</body>
</html>