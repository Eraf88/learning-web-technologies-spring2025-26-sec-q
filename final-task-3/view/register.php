<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Registration</h2>

<form method="post" action="../controller/register.php">

    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>

    Role:
    <select name="role">
        <option value="admin">Admin</option>
        <option value="customer">Customer</option>
    </select>

    <br><br>
    <input type="submit" value="Register">
</form>

<br>
<a href="login.html">Already have an account? Login</a>

</body>
</html>