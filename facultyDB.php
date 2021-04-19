<!DOCTYPE html>
<html>
    <head>
        <title>AMS Faculty Dashboard</title>
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
        <style>
            .facultydb{
                background: url(img/pic4.jpeg);
            }
        </style>
    </head>
    <header>
        <div class="topnav">
            <h1>Faculty Dashboard</h1>
            <ul>
                <li><a href="#">Mark Attendance</a></li>
                <li><a href="search-student.php">Search Student</a></li>
                <li><a href="faculty-change-password.php">Change Password</a></li>
                <li><a href="Logout.php">Log Out</a></li>
            </ul>
        </div>
    </header>
    <body class="facultydb">
        <div class="label1">
        <label for="Section">Choose a Section:</label>

        <select name="Section" id="Section">
            <option value="none">-Select-</option>
            <option value="class1">CLASS-1</option>
            <option value="class2">CLASS-2</option>
            <option value="class3">CLASS-3</option>
            <option value="class4">CLASS-4</option>
        </select>
        <br>
        <label for="Subject">Choose a Subject:</label>

        <select name="Subject" id="Subject">
            <option value="none">-Select-</option>
            <option value="maths">MATHS</option>
            <option value="english">ENGLISH</option>
            <option value="science">SCIENCE</option>
            <option value="social">SOCIAL STUDIES</option>
        </select>
        <input type="submit" name="" value="Submit">
    </div>
        <iframe src="markattendance.html" height="400" width="800" title="MA"></iframe>
    </body>
</html>