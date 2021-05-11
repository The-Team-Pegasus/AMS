<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>

<?php
    include('connect.php');
    try{
      
    if(isset($_POST['att'])){

      $course = $_POST['whichcourse'];

      foreach ($_POST['st_status'] as $i => $st_status) {
        
        $stat_id = $_POST['stat_id'][$i];
        $dp = date('Y-m-d');
        $course = $_POST['whichcourse'];
        
        $stat = mysqli_query($con,"insert into attendance(stat_id,course,st_status,stat_date) values('$stat_id','$course','$st_status','$dp')");
        
        $att_msg = "Attendance Recorded.";

      }
    }
  }
  catch(Execption $e){
    $error_msg = $e->$getMessage();
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Attendance Management System 1.0</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
  .status{
    font-size: 10px;
  }

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

<div class="row" style="background:transparent">

  <div class="content" style="background:transparent" >
    <h3>Attendance of <?php echo date('Y-m-d'); ?></h3>
    <br>

    <center><p><?php if(isset($att_msg)) echo $att_msg; if(isset($error_msg)) echo $error_msg; ?></p></center> 
    
    <form action="" method="POST" class="form-horizontal col-md-6 col-md-offset-3">

    <div class="form-group">
         <label class="col-sm-3 control-label" >Enter Class</label>
                <div class="col-sm-7">
                  <input class="form-control" type="text" name="whichbatch" id="input2" placeholder="Enter class">
                </div>
    </div>
               
     <input type="submit" class="btn btn-primary col-md-2 col-md-offset-5" value="Show!" name="batch" />

    </form>
    <div class="content" style="background:transparent"></div>
    <form action="" method="post" class="form-horizontal col-md-8 col-md-offset-2">

      <div class=" form-group">

        <label class=" col-sm-4 control-label">Select Subject</label>
        <div class=" col-sm-4">
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
      <br><br>

    <table class="table table-stripped" style="background:white; opacity:0.8">
      <thead>
        <tr>
          <th scope="col">Roll No.</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">E-mail</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
   <?php

    if(isset($_POST['batch'])){

     $i=0;
     $radio = 0;
     $batch = $_POST['whichbatch'];
     $all_query = mysqli_query($con,"select * from students where st_batch='$batch' order by st_id asc");

     while ($data = mysqli_fetch_array($all_query)) {
       $i++;
     ?>
  <body>
     <tr>
       <td><?php echo $data['st_id']; ?> <input type="hidden" name="stat_id[]" value="<?php echo $data['st_id']; ?>"> </td>
       <td><?php echo $data['st_name']; ?></td>
       <td><?php echo $data['st_batch']; ?></td>
       <td><?php echo $data['st_email']; ?></td>
       <td>
         <label>Present</label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Present" checked>
         <label>Absent </label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Absent" >
       </td>
     </tr>
  </body>

     <?php

        $radio++;
      } 
}
      ?>
    </table>
    <center><br>
    <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Save!" name="att" />
  </center>
</form>
  </div>
</div>
</center>
</body>
</html>
