<?php

ob_start();
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pegasus Attendance Management System</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        
        <link rel="stylesheet" href="styles.css" >
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
      header{
        font-size: 15px;
        font-style: bold;
        text-align: center;
    }
    .navbar {
        font-size: 20px;
        overflow: hidden;
        background-color: #333;
    }

    .navbar a {
        float: left;
        display: block;
        color: white; /*#dce3ed;*/
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    </style>
    </head>

    <body style="background-image: url('https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');
			background-repeat: no-repeat;
			background-attachment:fixed;
			background-size:cover;">
        <header>
        <h1>Student Dashboard</h1>
            <div class="navbar">
                <a href="report.php">My Report</a>
                <a href="student-change-password.php">Change Password</a>
                <a href="../logout.php">Logout</a>
            </div>
                
        </header>
    
       <!-- <div class="row">
            <h2>Change Password</h2>
            <form method="POST" >
                <h2>Change Password</h2>
                <div class="form-group">
                <p>Old Password</p>
                <input type="password" name="opwd" placeholder="enter old password">
                <p>New Password</p>
                <input type="password" name="npwd" placeholder="enter new password">
                <p>Confirm new Password</p>
                <input type="password" name="cpwd" placeholder="re-enter new password">
                <input type="submit" name="submit" value="Change">
            </form>
        </div> -->

    <div class="content">
    <div class="row">
    <h3 style= "text-align:center;">Change Your Password</h3><br>
    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
    

        <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Old Password</label>
          <div class="col-sm-7">
          <input class="form-control" type="password" name="opwd" placeholder="enter old password">
          </div>
        </div>
        <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">New Password</label>
          <div class="col-sm-7">
          <input class="form-control" type="password" name="npwd" placeholder="enter new password">
          </div>
        </div>
        <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Confirm New Password</label>
          <div class="col-sm-7">
          <input class="form-control" type="password" name="cpwd" placeholder="re-enter new password">
          </div>
      </div>
      <div class="col-sm-3"></div>
        <div class="col-sm-9">
        <?php if(isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error']; ?></p>

       <?php } ?>
    </div>
      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-5" value="submit" name="submit" />
    </form>

      <br>
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
if(empty($op)){
    header("Location: student-change-password.php?error=<b>Old Password Required⚠️");
    exit();
}
elseif(empty($np)){
    header("Location: student-change-password.php?error=<b>New Password Required⚠️");
    exit();
}


elseif($np!=$cp){
    header("Location: student-change-password.php?error=<b>New Password and Confirm New Password are not matching❌");
    exit();
}
elseif($op==$np){
    header("Location: student-change-password.php?error= <b>Your New Password is same as Old Password!");
    exit();
}
else{
    $sql="select * from admininfo where username='$uname' AND password='$op'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $sql="update admininfo set password='$np' where username='$uname' AND password='$op'";
        if(mysqli_query($con,$sql)){header("Location: student-change-password.php?error=<b><b>Password changed successfully✅");
            exit();

    }
        else{
            header("Location: student-change-password.php?error=<b>Failed to change password, Try again⚠️");
            exit();
        }
    }
    else{
        header("Location: student-change-password.php?error=<b>Incorrect Old Password❌");
        exit();
    }
}
    
}
?>