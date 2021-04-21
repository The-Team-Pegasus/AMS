<?php 
$host="localhost";
$user="root";
$password="";
$db="ams";

$con=  mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['username'])){

    echo "entered";
    $uname=$_POST['username'];
    $oldpwd=$_POST['oldpwd'];
    $newpwd=$_POST['newpwd'];
    $cnfmpwd=$_POST['cnfmpwd'];
    $sql="select password from login where username='".$uname."'AND password='".$oldpwd."' limit 1";
    
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1){
       
    }
    else {
       echo "oldpassword entered is incorect";
    }
    
        
}
?>
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
            <p>Enter Username</p>
            <input type="text" name="username" placeholder="User Id" >
                <p>Old Password</p>
                <input type="password" name="oldpwd" placeholder="enter old password">
                <p>New Password</p>
                <input type="password" name="newpwd" placeholder="enter new password">
                <p>Re-enter New Password</p>
                <input type="password" name="cnfmnew" placeholder="re-enter new password">
                <input type="submit" name="submit" value="Change">

            </form>
        </div>
    </body>
</html>
