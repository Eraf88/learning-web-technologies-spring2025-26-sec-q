<?php 
   session_start();

   
    $name = $email = $uname = $gender = $dd = $mm = $yyyy = "";

    if(isset($_REQUEST['submit'])){

        $name   = $_REQUEST['name'];
        $email  = $_REQUEST['useremail'];
        $uname  = $_REQUEST['username'];
        $pass   = $_REQUEST['password'];
        $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
        $dd     = $_REQUEST['dd'];
        $mm     = $_REQUEST['mm'];
        $yyyy   = $_REQUEST['yyyy'];
        
    if(empty($name)){

        $errors[] = "Names cannot be empty";

    } elseif(word_count($name) < 2){

        $errors[] = "Names must contain atleast two words";

    }

    if(empty($email)){
         $errors[] = "Email cannot be empty.";

    } elseif (!val_email($email, VALIDATE_EMAIL)) {
        
        $errors[] = "Invalid email format.";
    }

    if(empty($uname)){
        $errors[] = "Username is required.";
    } elseif (strlen($uname) < 3) {

        $errors[] = "Username must be at least 3 characters.";

    }

    if(empty($pass)){

        $errors[] = "Password is required.";

    } elseif (strlen($pass) < 4) {

        $errors[] = "Password must be at least 4 characters.";
    
    } elseif ($pass !== $conpass) {

        $errors[] = "Passwords do not match";
        
    }

    if (empty($gender)) {
        $errors[] = "Please select a gender";
    }
    if(empty($dd) || empty($mm) || empty($yyyy)){

        $errors[] = "Date of Birth cannot be empty.";

    } elseif (!is_number($dd) || !is_number($mm) || !is_number($yyyy)) {

        $errors[] = "Date of Birth must be numeric values.";

    } elseif ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12) {

        $errors[] = "Please enter a valid date.";
    }


    }
?>



<html>
<head>
    <title>Regsitration</title>
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
     <form>
        <table border="1" cellpadding="10" cellspacing="0">
            
            <tbody>
                <tr>
                    <td>Name</td>
                    <td><input type="text" id="username" name="username" style="width: 90%;" /></td>
                    <td width="30"></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" id="useremail" name="useremail" style="width: 90%;" /></td>
                    <td></td>
                </tr>
                <tr>
                                
                     <td>User Name</td>
                     <td><input type="text" name="username" value="<?php echo $uname; ?>" style="width: 90%;" /></td>
                     <td></td>
                </tr>
                <tr>
                     <td>Password</td>
                     <td><input type="password" name="password" style="width: 90%;" /></td>
                     <td></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="confirmpass" style="width: 90%;" /></td>
                    <td></td>
                </tr>
              

                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="male" /> Male
                        <input type="radio" name="gender" value="female" /> Female
                        <input type="radio" name="gender" value="other" /> Other
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input type="text" id="day" size="2" /> / 
                        <input type="text" id="month" size="2" /> / 
                        <input type="text" id="year" size="4" /> 
                        <i style="font-size: 12px; color: black;">(dd/mm/yyyy)</i>
                    </td>
                    <td></td>
                </tr>


                <tr>
                    <td colspan="3" style="height: 30px;"></td>
                </tr>

                <tr>
                    <td colspan="3" align="right">
                        <input type="submit" value="Submit" />
                        <input type="reset" value="Reset" />
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
            </td>
        </tr>
        <tr>
            <td align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
</body>