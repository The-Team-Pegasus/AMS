<?php 

$host="localhost";
$user="root";
$password="";
$db="ams";

$con=  mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    $sub_string = substr($uname, 0, 3);

    if(mysqli_num_rows($result)==1 && $sub_string=='FAC' ){
        session_start();
        $_SESSION['is_login']=true;
        $_SESSION['username']=$username;
        header("Location: facultyDB.php");
        exit();
    }
    else if(mysqli_num_rows($result)==1 && $sub_string=='STU'){
        session_start();
        $_SESSION['is_login']=true;
        $_SESSION['username']=$username;
        header("Location: studentDB.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Pegsus School Login</title>
    <link rel="stylesheet" href="./CSS/styles2.css">
   
  </head>
  <body>
    <section class="form my-5 mx-5 ">
        <div class=container>
            <div class= "row ">
                <div class="col-lg-6">
                    <img src="./img/BG2.jpeg" class="img-fluid " alt=""></img>
                                  </div>
                                  <div class=" col-lg-6 px-5 pt-5">
                                    <h1 class="font-weight-bold py-3">Pegasus Secondary School</h1>
                                    <h4>Sign into your account</h4>
                                    <form method="POST" action="#">
                                        <div class="form-row">
                                            <div class="col-lg-7">
                                                <input type="text" name="username" placeholder="User Id" class="form-control my-3 p-3">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="col-lg-7">
                                              <input type="password" name="password" placeholder="Enter password" class="form-control my-3 p-3">
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="col-lg-7">
                                              <button type="button mt-5 mb-3 p-3" name="submit" class="btn1">Login</button>
                                          </div>
                                      </div>
                                      <br>
                                      <a href="#">Forget password</a>
                                      <p>Dont have an account? <br>please visit school's administration office</p>
                                    </form>
                                </div>
            </div>
        </div>
  </section>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
</html>