<!DOCTYPE html>
<html>
    <head>
        <title>AMS faculty change password</title>
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
        <style>
            .fchangepwd{
                background: url(img/pic4.jpeg);
            }
        </style>
    </head>
    <header>
        <div class="topnav">
            <h1>Faculty Dashboard</h1>
            <ul>
                <li><a href="facultyDB.php">Mark Attendance</a></li>
                <li><a href="search-student.php">Search Student</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </div>
    </header>

    <body class="fchangepwd">
        <div class="fcpwd">
            <h2>Change Password</h2>
            <form></form>
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