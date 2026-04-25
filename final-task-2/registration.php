<?php
session_start();
 
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}
 
if (isset($_POST['submit'])) {
 
    $username = $_POST['username'];
 
 
    if (!isset($_SESSION['users'][$username]) &&
        $_POST['password'] == $_POST['confirm']) {
 
        $_SESSION['users'][$username] = [
            "name" => $_POST['name'],
            "username" => $username,
            "password" => $_POST['password'],
            "gender" => $_POST['gender'],
            "dob" => $_POST['dd'] . "/" . $_POST['mm'] . "/" . $_POST['yyyy']
        ];
 
        header("Location: login.php");
        exit();
 
    } else {
        echo "Registration failed (username exists or password mismatch)";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
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
<legend>REGISTRATION</legend>
 
            <form method="post">
 
                <table>
<tr>
<td>Name</td>
<td>:</td>
<td><input type="text" name="name"></td>
</tr>
</table>
<hr>
 
                <table>
<tr>
<td>Email</td>
<td>:</td>
<td><input type="email" name="email"></td>
</tr>
</table>
<hr>
 
                <table>
<tr>
<td>User Name</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
</table>
<hr>
 
                <table>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
</table>
<hr>
 
                <table>
<tr>
<td>Confirm Password</td>
<td>:</td>
<td><input type="password" name="confirm"></td>
</tr>
</table>
<hr>
 
                <fieldset>
<legend>Gender</legend>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
</fieldset>
 
 
                <fieldset>
<legend>Date of Birth</legend>
<input type="text" name="dd"> /
<input type="text" name="mm"> /
<input type="text" name="yyyy">
<span>(dd/mm/yyyy)</span>
</fieldset>
 
                <br>
 
 
                <br><hr>
 
                <input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset">
 
            </form>
 
        </fieldset>
 
    </div>
<footer>
<p>Copyright © 2017</p>
</footer>
</div>
 
</body>
</html>