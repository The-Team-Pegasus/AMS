<?php 
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['username'])) {


?>
<!DOCTYPE html>
<html>
    <head>
        <title>AMS Student Dashboard</title>
        <link rel="stylesheet" type="text/css" href="./CSS/styles3.css">
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
            <form method="POST">
                <label for="Section"><b>CHOOSE YOUR SECTION:</label><br>

                    <select name="section" id="Section">
                        <option value="none">-Select-</option>
                        <option value="class1">CLASS-1</option>
                        <option value="class2">CLASS-2</option>
                        <option value="class3">CLASS-3</option>
                        <option value="class4">CLASS-4</option>
                    </select><br>

                <label for="Subject" ><b>CHOOSE A SUBJECT:</b></label>

                    <select name="subject" id="Subject">
                    <option value="none">-Select-</option>
                    <option value="maths">MATHS</option>
                    <option value="english">ENGLISH</option>
                    <option value="science">SCIENCE</option>
                    <option value="social">SOCIAL STUDIES</option>
                    </select><br>

                <input type="submit" name="" value="Submit"><br><br>
            </form>
        </div>
        
        <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $host="localhost";
                $user="root";
                $password="";
                $db="ams";

                $con=  mysqli_connect($host,$user,$password);
                mysqli_select_db($con,$db);
               
                if(isset($_POST['section']) && isset($_POST['subject'])  ){
                   
                    $uname=$_SESSION['username'];
                    $section=$_POST['section'];
                    $subject=$_POST['subject'];
                    
                    $sql="SELECT date,status FROM `srcstud` WHERE username='$uname' AND section='$section' AND subject='$subject' ";
                    
                    $result=mysqli_query($con,$sql);

                            while($res= mysqli_fetch_assoc($result))
                            {
                ?>
                            <tr>
                                <td><?php echo $res['date']; ?></td>
                                <td><?php echo $res['status']; ?></td>
                            <tr>
                        <?php
                        }
                        ?>
                <?php
                }
                ?>
                <tr>
                                <td>attendance percentage</td>
                                <td>percentage</td>
                            <tr>
                    </tbody>
                </table>
    
    </body>
    </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>