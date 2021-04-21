<!DOCTYPE html>
<html>
    <head>
        <title>AMS student change password</title>
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
        <style>
            .schangepwd{
                background: url(img/pic2.jpeg);
            }
        </style>
    </head>
    <header>
        <div class="topnav1">
            <h1>Student Dashboard</h1>
            <ul>
                <li><a href="studentDB.php">View Attendance</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </div>
    </header>
    <body class="schangepwd">
        <div class="scpwd">
            <h2>Change Password</h2>
            <form>
                <p>Old Password</p>
                <input type="password" name="" placeholder="enter old password">
                <p>New Password</p>
                <input type="password" name="" placeholder="enter new password">
                <p>Re-enter New Password</p>
                <input type="password" name="" placeholder="re-enter new password">
                <input type="submit" name="" value="Change">
            </form>
        </div>
    </body>
</html>