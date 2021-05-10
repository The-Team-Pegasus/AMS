<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>

<?php

include('connect.php');

//data insertion
  try{

    //checking if the data comes from students form
    if(isset($_POST['std'])){

        if(empty($_POST['st_id'])){
          throw new Exception("Student Roll No. can't be empty!");
        }

          if(empty($_POST['st_name'])){
             throw new Exception("Student name can't be empty!");
          }

            if(empty($_POST['st_batch'])){
               throw new Exception("Student batch must be assigned!");
            }
              
              if(empty($_POST['st_email'])){
                 throw new Exception("Student email should be added!");
              }
               
      //students data insertion to database table "students"
        $result = mysqli_query($con,"insert into students(st_id,st_name,st_batch,st_email) values('$_POST[st_id]','$_POST[st_name]','$_POST[st_batch]','$_POST[st_email]')");
        $success_msg = "Student added successfully!";

    

        //checking if the data comes from teachers form
        if(isset($_POST['tcr'])){

          //teachers data insertion to the database table "teachers"
          $res = mysqli_query($con,"insert into teachers(tc_id,tc_name,tc_dept,tc_email) values('$_POST[tc_id]','$_POST[tc_name]','$_POST[tc_dept]','$_POST[tc_email]')");
          $success_msg = "Teacher added successfully!";
    }

  }
}
catch(Exception $e){
  $error_msg =$e->getMessage();
}

 ?>



<!DOCTYPE html>
<html lang="en">
<!-- head started -->
<head>
<title>Admin Section</title>
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

  .message{
    padding: 10px;
    font-size: 15px;
    font-style: bold;
    color: black;
  }
</style>
</head>
<!-- head ended -->

<!-- body started -->
<body style="background-image: url('https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');
			background-repeat: no-repeat;
			background-attachment:fixed;
			background-size:cover;">

    <!-- Menus started-->
    <header>

      <h1>Admin Section</h1>
      <div class="navbar">
      <a href="signup.php">Create Users</a>
      <a href="index.php">Add Data</a>
      <a href="admin-change-password.php">Change Password</a>
      <a href="../logout.php">Logout</a>

    </div>

    </header>
    <!-- Menus ended -->

<center>
<!-- Error or Success Message printint started -->
<p>    <?php
    if(isset($success_msg)) echo $success_msg;
    if(isset($error_msg)) echo $error_msg;
     ?>
       
     </p>
<!-- Error or Success Message printint ended -->

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="content" style="background:transparent">

  
<div class="col-sm-0"></div>
        <div class="col-sm-12">
        <?php if(isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error']; ?></p>

       <?php } ?>
    </div>
  <div class="row" id="student">



      <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
      <h4>Add Student's Information</h4>
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Roll No.</label>
          <div class="col-sm-7">
            <input type="text" name="st_id"  class="form-control" id="input1" placeholder="student roll no." />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-7">
            <input type="text" name="st_name"  class="form-control" id="input1" placeholder="student full name" />
          </div>
      </div>


      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Batch</label>
          <div class="col-sm-7">
            <input type="text" name="st_batch"  class="form-control" id="input1" placeholder="batch " />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="st_email"  class="form-control" id="input1" placeholder="valid email" />
          </div>
      </div>


      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Add Student" name="std" />
    </form>

  </div>
<br><br><br>
  <div class="rowtwo" id="teacher">
  

       <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
        <h4>Add Teacher's Information</h4>
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Teacher ID</label>
          <div class="col-sm-7">
            <input type="text" name="tc_id"  class="form-control" id="input1" placeholder="teacher's id" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-7">
            <input type="text" name="tc_name"  class="form-control" id="input1" placeholder="teacher full name" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Department</label>
          <div class="col-sm-7">
            <input type="text" name="tc_dept"  class="form-control" id="input1" placeholder="department" />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="tc_email"  class="form-control" id="input1" placeholder="valid email" />
          </div>
      </div>


      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Add Teacher" name="tcr" />
    </form>
    
  </div>


</div><br>
<!-- Contents, Tables, Forms, Images ended -->

</center>
</body>
<!-- Body ended  -->
</html>
