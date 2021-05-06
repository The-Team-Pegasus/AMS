<?php
session_start();
if(isset($_POST['login']))
{
	//start of try block

	try{

		//checking empty fields
		if(empty($_POST['username'])){
			throw new Exception("Username is required!");
			
		}
		if(empty($_POST['password'])){
			throw new Exception("Password is required!");
			
		}
		//establishing connection with db and things
		include ('connect.php');
		
		//checking login info into database
		$r=0;
		$result=mysqli_query($con,"select * from admininfo where username='$_POST[username]' and password='$_POST[password]' and type='$_POST[type]'");

		$r=mysqli_num_rows($result);

		if($r>0 && $_POST["type"] == 'teacher'){
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] == $_POST['username'] && $row['password'] == $_POST['password']) {
            	$_SESSION['name']="oasis";
			$_SESSION['username'] = $row['username'];
            
            	$_SESSION['id'] = $row['id'];
			header('location: teacher/attendance.php');
		        exit();
			}
		}

		else if($r>0 &&  $_POST["type"] == 'student'){
		
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] == $_POST['username'] && $row['password'] == $_POST['password']) {
            	$_SESSION['name']="oasis";
			$_SESSION['username'] = $row['username'];
            
            	$_SESSION['id'] = $row['id'];
			header('location: student/report.php');
		        exit();
			}
		}

		else if($r>0 && $_POST["type"] == 'admin'){
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] == $_POST['username'] && $row['password'] == $_POST['password']) {
            	$_SESSION['name']="oasis";
			$_SESSION['username'] = $row['username'];
            
            	$_SESSION['id'] = $row['id'];
			header('location: admin/index.php');
		        exit();
			}
		}

		else{
			throw new Exception("Username,Password or Role is wrong, try again!");
			
			header('location: login.php');
		}
	}

	//end of try block
	catch(Exception $e){
		$error_msg=$e->getMessage();
	}
	//end of try-catch
}

?>

<!DOCTYPE html>
<html>
<head>
	<br><br><br><br><br><br>
	<title>Pegasus Attendance Management System</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	 
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	 
	<link rel="stylesheet" href="styles.css" >
	 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style="background-image: url('https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260');
			background-repeat: no-repeat;
			background-attachment:fixed;
			background-size:cover;">
	<center>
<div class="text-center" style="margin-bottom:0">
<header>

  <h1>Pegasus Attendance Management System </h1>

</header>
</div>
<h1>Login</h1>

<?php
//printing error message
if(isset($error_msg))
{
	echo $error_msg;
}
?>


<!-- <div class="content"> -->
	<div class="row">

		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Username</label>
			    <div class="col-sm-7">
			      <input type="text" name="username"  class="form-control" id="input1" placeholder="your username" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Password</label>
			    <div class="col-sm-7">
			      <input type="password" name="password"  class="form-control" id="input1" placeholder="your password" />
			    </div>
			</div>


			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-3 control-label">Role</label>
			<div class="col-sm-7">
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="student" checked> Student
			  </label>
			  	  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher
			  </label>
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
			  </label>
			</div>
			</div>


			<input type="submit" class="btn btn-primary col-md-3 col-md-offset-5" value="Login" name="login" />
		</form>
	</div>
<!-- </div> -->



<br><br>
<!--<p>hello</p><br>
<p>hello</p><br>
<p>hello</p><br>
<p>hello</p><br>
<p>hello</p><br>
<p>hello</p><br>
<p>hello</p><br><p>hello</p><br><p>hello</p><br><p>hello</p><br><p>hello</p><br><p>hello</p><br><p>hello</p><br>-->
</center>
</body>
</html>