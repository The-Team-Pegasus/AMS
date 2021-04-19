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
            <input type="text" name="" placeholder="enter roll number"></p>
            <br>
            <label for="Section">Choose a Section:</label><br>

        <select name="Section" id="Section">
            <option value="none">-Select-</option>
            <option value="CSEA">CSEA</option>
            <option value="CSEB">CSEB</option>
            <option value="CSEC">CSEC</option>
            <option value="CSED">CSED</option>
        </select>
        <br>
        <label for="Subject">Choose a Subject:</label><br>

        <select name="Subject" id="Subject">
            <option value="none">-Select-</option>
            <option value="CN">Computer Networks</option>
            <option value="CD">Compiler Design</option>
            <option value="SE">Software Engineering</option>
            <option value="SSK">Softskills</option>
        </select>
        <input type="submit" name="" value="Submit">
    </div>
    </body>
</html>