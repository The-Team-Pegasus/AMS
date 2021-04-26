<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
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
            <form method="POST" >
               <p>Old Password</p>
                <input type="password" name="opwd" placeholder="enter old password">
                <p>New Password</p>
                <input type="password" name="npwd" placeholder="enter new password">
                <p>Confirm new Password</p>
                <input type="password" name="cpwd" placeholder="re-enter new password">
                <input type="submit" name="submit" value="Change">
            </form>
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

$host="localhost";
$user="root";
$password="";
$db="ams";

$con=  mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);



if(isset($_POST['submit'])){
    $uname=$_SESSION['username'];
   
$op=$_POST['opwd'];
$np=$_POST['npwd'];
$cp=$_POST['cpwd'];
if($np!=$cp){
    echo "New password and confirm new password are not matching";
}
else{
    $sql="select * from login where username='$uname' AND password='$op'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $sql="update login set password='$np' where username='$uname' AND password='$op'";
        if(mysqli_query($con,$sql)){
        echo "Password changed successfully";}
        else{
            echo "Failed to change password, Try again";
        }
    }
    else{
        echo "Incorect Old password";
    }
}
    
}

?>