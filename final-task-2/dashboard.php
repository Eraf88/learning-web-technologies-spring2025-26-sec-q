<?php
    session_start();
    
    if(!isset($_SESSION['status'])){
        header('location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <table border="1" width="100%" cellspacing="0">
        <tr>
            <td align="left"><h2>XCompany</h2></td>
            <td align="right">
                Logged in as <?php echo $_SESSION['username']; ?> | <a href="logout.php">Logout</a>
            </td>
        </tr>

        <tr>
            <td width="30%">
                <b>Account</b>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_pic.php">Change Profile Picture</a></li>
                    <li><a href="change_pass.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td>

            <td height="200px">
                <h3>Welcome <?php echo $_SESSION['username']; ?></h3>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
</body>
</html>