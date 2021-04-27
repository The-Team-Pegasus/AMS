<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>AMS Faculty Dashboard</title>
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
        <style>
            .facultydb{
                background: url(img/pic4.jpeg);
            }

            label{
                font-size:15px;
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
            <form>
                <label for="Date"><b>DATE :</b></label><br>
                <input type="date" name="date"><br>

                <label for="Section"><b>CHOOSE A SECTION :</b></label><br>
                <select name="Section" id="Section">
                    <option value="none">-Select-</option>
                    <option value="class1">CLASS-1</option>
                    <option value="class2">CLASS-2</option>
                    <option value="class3">CLASS-3</option>
                    <option value="class4">CLASS-4</option>
                </select>
                <br>

                <label for="Subject"><b>CHOOSE A SUBJECT :</b></label><br>
                <select name="Subject" id="Subject">
                    <option value="none">-Select-</option>
                    <option value="maths">MATHS</option>
                    <option value="english">ENGLISH</option>
                    <option value="science">SCIENCE</option>
                    <option value="social">SOCIAL STUDIES</option>
                </select>
                <br>
                <input type="submit" name="" value="Submit">
            </form>
        </div>
        <div class="markattendance">
        <iframe src="markattendance.php" height="300" width="800" title="MA"></iframe>
        </div>
    

    </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>


<?php 