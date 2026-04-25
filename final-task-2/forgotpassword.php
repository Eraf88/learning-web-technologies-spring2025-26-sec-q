<?php
    $error = "";
    $email = "";

    
    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['email'];

        if($email == ""){
            $error = "Email cannot be empty!";
        } else {
            
            $error = "Email Sent " . $email;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
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
            <td colspan="2" height="200px" align="center">
                <form method="post" action="forgot_password.php">
                    <fieldset style="width: 400px;">
                        <legend><b>FORGOT PASSWORD</b></legend>
                        
                        <div style="color: blue;">
                            <?php echo $error; ?>
                        </div>
                        <br>
                        
                        Enter Email: <input type="text" name="email" value="<?php echo $email; ?>">
                        <hr>
                        <input type="submit" name="submit" value="Submit">
                    </fieldset>
                </form>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
</body>
</html>