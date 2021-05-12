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
<title>Pegasus Attendance Management System</title>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</style>

</head>
<body style="background-image: url('https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');
			background-repeat: no-repeat;
			background-attachment:fixed;
			background-size:cover;">

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

<center>

<div class="row">

  <div class="content" style="background:transparent">
    <h3>Students List</h3>
    <br>
    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
      <label class="col-sm-3 control-label">Class</label>
      <div class="col-sm-7">
      <input class="form-control" type="text" name="sr_batch">
      <br>
      </div>
      <input class="btn btn-primary col-md-2 col-md-offset-5" type="submit" name="sr_btn" value="Go!" >
    </form>
    <div class="col-md-8 col-md-offset-2">
    <br>
    <table class="table table-stripped" style="background:white; opacity:0.8">
      <thead>
        <tr>
          <th scope="col">Roll No.</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">Email</th>
        </tr>
      </thead>

   <?php

    if(isset($_POST['sr_btn'])){
     
     $srbatch = $_POST['sr_batch'];
     $i=0;
     
     $all_query = mysqli_query($con,"select * from students where students.st_batch = '$srbatch' order by st_id asc ");
     
     while ($data = mysqli_fetch_array($all_query)) {
       $i++;
     
     ?>
  <tbody>
     <tr>
       <td><?php echo $data['st_id']; ?></td>
       <td><?php echo $data['st_name']; ?></td>
       <td><?php echo $data['st_batch']; ?></td>
       <td><?php echo $data['st_email']; ?></td>
     </tr>
  </tbody>

     <?php 
          } 
              }
      ?>
      
    </table>
    </div>

  </div>

</div>

</center>

</body>
</html>

