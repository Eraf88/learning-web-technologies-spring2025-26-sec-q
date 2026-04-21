<?php 
    session_start();
    
    $error = "";
    $user_val = "";
    
    // Retrieve cookie if it exists
    if(isset($_COOKIE['username'])){
        $user_val = $_COOKIE['username'];
    }

    // Process submission
    if (isset($_REQUEST['submit'])) {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            $error = "Need username or password";
        } else {
            // Login Logic
            if($username == $password){
                $_SESSION['status'] = true;
                $_SESSION['username'] = $username;

                // Handle "Remember Me" cookie
                if(isset($_REQUEST['remember'])){
                    setcookie('username', $username, time()+3600, '/');
                }

                // Redirect to dashboard
                header('location: dashboard.php');
                exit(); 
            } else {
                $error = "Invalid username or password";
            }
        }
    }
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="left"><h2>XCompany</h2></td>
            <td align="right">
                <a href="publichome.php">Home</a> 
                <a href="login.php">Login</a> 
                <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td>
                <form method="post" action="login.php">
                    <fieldset>
                        <legend>Log In</legend>
                        
                        <div style="color: red;"><?php echo $error; ?></div><br>

                        Username: <input type="text" name="username" value="<?php echo $user_val; ?>"><br><br>
                        Password: <input type="password" name="password" value=""><br> <br>
                        
                        <input type="checkbox" name="remember"> Remember Me <br><br>
                        <input type="submit" name="submit" value="submit"> 
                        <a href="forgotpassword.php">Forgot Password</a>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
</body>
</html>