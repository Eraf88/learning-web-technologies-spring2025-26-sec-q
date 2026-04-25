<?php
    session_start();

    if(isset($_SESSION['current_user'])) {
        $username = $_SESSION['current_user'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <div class="content dashboardContent">
            <div>
                <h2>Account</h2>
                <hr>
                <ul>
                    <a href="dashboard.php"><li>Dashboard</li></a>
                    <a href="#"><li>View Profile</li></a>
                    <a href="#"><li>Edit Profile</li></a>
                    <a href="#"><li>Change Profile Picture</li></a>
                    <a href="#"><li>Change Password</li></a>
                    <a href="#"><li>Logout</li></a>
                </ul>
            </div>

            <div class="vl"></div>

            <div>
                <h1>Welcome: <?php echo $username ?></h1>
            </div>

        </div>

        <footer>
            <p>Copyright © 2017</p>
        </footer>
    </div>
</body>
</html>