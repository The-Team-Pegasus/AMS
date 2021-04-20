<!DOCTYPE html>
<html>
    <head>
        <title>AMS Student Dashboard</title>
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
        <style>
            .studentdb{
                background: url(img/pic2.jpeg);
            }
        </style>
    </head>
    <header>
        <div class="topnav1">
        <h1>Student Dashboard</h1>
        <nav>
            <ul>
                <li><a href="#">View Attendance</a></li>
                <li><a href="student-change-password.php">Change Password</a></li>
                <li><a href="Logout.php">Log Out</a></li>
            </ul>
        </nav></div>
    </header>
    <body class="studentdb">
        <div class="label1">
        <label for="Subject">Choose a Subject:</label>

        <select name="Subject" id="Subject">
            <option value="none">-Select-</option>
            <option value="CN">Computer Networks</option>
            <option value="CD">Compiler Design</option>
            <option value="SE">Software Engineering</option>
            <option value="SSK">Softskills</option>
        </select>
        <input type="submit" name="" value="Submit"></div><br><br>
        <iframe src="viewattendance.html" height="400" width="800" style="border:1px solid black" class="mx-5 my-5"></iframe>
    </body>
    </body>
</html>