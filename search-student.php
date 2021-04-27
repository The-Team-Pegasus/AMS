<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>AMS Student Report</title>
        <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
        <style>
            .facultydb{
                background: url(img/pic4.jpeg);
            }
            .form2 option{
                color: black;
            }
            .form2 p{
                font-size: 30px;
                color: rgb(219, 122, 58);
                top: 20px;
                margin: 15px;
                border: 10px,10px;
            }

            .form2 input[type="text"]{
                width: 80%;
                height: 30px;
                font-size: 20px;
                margin: 10px;
                border: none;
                background-color: transparent;
                border-bottom: 2px solid rgb(236, 230, 230);
                color: rgb(0, 0, 0);
                
            }

            .form2 option{
                color: black;
            }

            .form2 form{
                width: 300px;
                height: 430px;
                top: 5%;
                left: 5%;
                position: absolute;
                background-color: black;
                color: blanchedalmond;
                padding: 10px 20px;
                margin-top: 10%;
            }

            .form2 input[type="submit"]{
                border: none;
                outline: none;
                height: 50px;
                width: 70px;
                position: absolute;
                top: 80%;
                left: 40%;
                background: #fb2525;
                color: #fff;
                font-size: 18px;
                margin-top: 18px;
            }

            .form2 input[type="submit"]:hover{
                cursor:pointer ;
                background: rgb(15, 158, 15);
                color: #000
            }



            .form2 label{
                font-size: 30px;
                color: rgb(219, 122, 58);
                margin: 20px;
                padding-bottom: 40px;
                border-bottom: 30px;
            }

            .form2 select{
                color: blanchedalmond;
                width: 70%;
                height: 40px;
                font-size: 20px;
                margin: 25px;
                border: 20px;
                border: none;
                background-color: transparent;
                border-bottom: 2px solid rgb(248, 247, 247);
            }

            .form2 input[type="text"]{
                color: white;

            }
            table{
                width: 400px;
                margin-top: 80px;
                margin-right: 300px;
                border-spacing:0px;
                table-layout: fixed;
                text-align: center;
                border : 1px solid white;
                float: right;
                padding:10px;
                border-collapse: collapse;
            }
            th, td{
                border : 1px solid white;
                border-collapse: collapse;
                color:white;
                padding:15px;
                width: 200px;
                overflow: hidden;
            }
            thead{
                display: block;
                overflow-y: auto;
            }
            tbody{
                height: 500px;
                display: block;
                overflow-y: auto;
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
            <form method="POST">
            <p>Enter Roll Number
            <input type="text" name="rollno" placeholder="enter roll number"></p>
            <br>
            <label for="Section">Choose a Section:</label><br>

        <select name="section" id="Section">
        <option value="none">-Select-</option>
            <option value="class1">CLASS-1</option>
            <option value="class2">CLASS-2</option>
            <option value="class3">CLASS-3</option>
            <option value="class4">CLASS-4</option>
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
        <input type="submit" name="submit" value="submit">
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

                if(isset($_POST['submit'])){
                    $rollno=$_POST['rollno'];
                    $section=$_POST['section'];
                    $subject=$_POST['subject'];
                    
                    $sql="SELECT date,status FROM `srcstud` WHERE rollno='$rollno' AND section='$section' AND subject='$subject' ";
                    
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
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>


<?php 