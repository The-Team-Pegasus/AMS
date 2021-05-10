<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>
<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">


<head>
<title>Online Attendance Management System 1.0</title>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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


<center>

<div class="row">

  <div class="content" style="background:transparent">
    <h3>Student Report</h3>
    <br>
    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">

  <div class="form-group">

      <label  for="input1" class="col-sm-3 control-label">Select Subject</label>
        <div class="col-sm-7">
        <select class="form-control" name="whichcourse" id="input1">
          <option  value="maths1">Maths-1</option>
          <option  value="maths2">Maths-2</option>
          <option  value="physics">Physics</option>
          <option  value="physicslab">Physics Lab</option>
          <option  value="chemistry">Chemistry</option>
          <option  value="chemistrylab">Chemistry Lab</option>
          <option  value="biology">Biology</option>
          <option  value="english">English</option>
          <option  value="softskills">Soft Skills</option>

        </select>
        </div>

    </div>

    <div class="form-group">
           <label for="input1" class="col-sm-3 control-label">Your Roll No.</label>
              <div class="col-sm-7">
                  <input type="text" name="sr_id"  class="form-control" id="input1" placeholder="enter your roll no." />
              </div>
    </div>
    <div class="col-sm-5"></div>
        <div class="col-sm-7">
        <?php if(isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error']; ?></p>

       <?php } ?>
    </div>
        <input type="submit" class="btn btn-primary col-md-2 col-md-offset-7" value="Go!" name="sr_btn" />
    </form>
    <br>
    <br>

    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3"><br><br>
    <table class="table table-striped rounded-sm" style="background:white; opacity:0.8">

   <?php


    if(isset($_POST['sr_btn'])){

      
     $sr_id = $_POST['sr_id'];
     $course = $_POST['whichcourse'];

     $i=0;
     $count_pre = 0;
     


    if(empty($sr_id)){
      header("Location: report.php?error=<b>Roll No. Required⚠️");
      exit();
    }

    $result=mysqli_query($con,"select * from students where st_id='$_POST[sr_id]'");

    $r=mysqli_num_rows($result);

    if($r<1){
      header("Location: report.php?error=<b>Enter a valid Roll No⚠️");
      exit();
    }

    $all_query = mysqli_query($con,"select stat_id,count(*) as countP from attendance where attendance.stat_id='$sr_id' and attendance.course = '$course' and attendance.st_status='Present'");

     $singleT= mysqli_query($con,"select count(*) as countT from attendance where attendance.stat_id='$sr_id' and attendance.course = '$course'");

     $count_tot;

     if ($row=mysqli_fetch_row($singleT))
     {
     $count_tot=$row[0];
     }

     while ($data = mysqli_fetch_array($all_query)) {
       $i++;
     


       if($i <= 1){
     ?>
        

     <tbody>
      <tr>
          <td>Roll No. : </td>
          <td><?php echo $data['stat_id']; ?></td>
      </tr>

      <tr>
        <td>Total Class (Days): </td>
        <td><?php echo $count_tot; ?> </td>
      </tr>

      <tr>
        <td>Present (Days): </td>
        <td><?php echo $data[1]; ?> </td>
      </tr>

      <tr>
        <td>Absent (Days): </td>
        <td><?php echo $count_tot -  $data[1]; ?> </td>
      </tr>

    </tbody>

   <?php

     }  
    }}
     ?>
    </table>
  </form>
  </div>

</div>



</center>

</body>


</html>
