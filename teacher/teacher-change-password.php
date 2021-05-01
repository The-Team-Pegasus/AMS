<?php

ob_start();
session_start();
echo isset($_SESSION['id']) ;
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<?php include('connect.php');?>

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
    <h1>Faculty Dashboard</h1>
  <div class="navbar">
  <a href="students.php">Students</a>
  <a href="attendance.php">Attendance</a>
  <a href="report.php">Report</a>
  <a href="teacher-change-password.php">Change Password</a>
  <a href="../logout.php">Logout</a>

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
     header("Location: ../index.php");
     exit();
}
 ?>


 

<?php 



if(isset($_POST['submit'])){
    $uname=$_SESSION['username'];
   
$op=$_POST['opwd'];
$np=$_POST['npwd'];
$cp=$_POST['cpwd'];
if($np!=$cp){
    echo "New password and confirm new password are not matching";
}
else{
    $sql="select * from admininfo where username='$uname' AND password='$op'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $sql="update admininfo set password='$np' where username='$uname' AND password='$op'";
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