<!DOCTYPE html>
<html>
    <head>
        <title>AMS Student Report</title>
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
                <li><a href="facultyDB.php">Mark Attendance</a></li>
                <li><a href="#">Student Report</a></li>
                <li><a href="faculty-change-password.php">Change Password</a></li>
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </div>
    </header>

    <body class="facultydb">
        <div class="form2">
            <p>Enter Roll Number
            <input type="text" name="rollno" placeholder="enter roll number"></p>
            <br>
            <label for="Section">Choose a Section:</label><br>

        <select name="section" id="Section">
        <option value="none">-Select-</option>
            <option value="class-1">CLASS-1</option>
            <option value="class-2">CLASS-2</option>
            <option value="class-3">CLASS-3</option>
            <option value="class-4">CLASS-4</option>
        </select>
        <br>
        <label for="Subject">Choose a Subject:</label><br>

        <select name="subject" id="Subject">
        <option value="none">-Select-</option>
            <option value="maths">MATHS</option>
            <option value="english">ENGLISH</option>
            <option value="science">SCIENCE</option>
            <option value="social">SOCIAL STUDIES</option>
        </select>
        <input type="submit" name="" value="Submit">
    </div>
    </body>
</html>