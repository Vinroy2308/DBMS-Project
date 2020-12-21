<?php
require('config.php');
session_start();

if(isset($_POST['admin_name']))
{
    $admin_name=$_POST['admin_name'];
    $password=$_POST['admin_password'];
    $sql= "SELECT aid,admin_password FROM admin WHERE admin_name = '".$admin_name."'and admin_password = '".$password."'limit 1";
    $result= mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['admin_name']=$admin_name;
        header("location: admin.php");
        //echo "logged in";
    }
    else
    {
        echo "Not logged in";
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylereg.css">
    <title>medbay</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark">
  <img src="images/doc.png" alt="...">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="log.php">Patient</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adlog.php">Admin</a>
      </li>

      
     
    </ul>
  </div>
</nav>

<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="POST">
  <div class="form-group">
    <label for="inputName">Admin Name</label>
    <input type="text" name="admin_name" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" name="admin_password" class="form-control" id="InputPassword" placeholder="Enter Password">
  </div>

<div class="form-group">
                <input type="submit" name="loggedin" class="btn btn-primary" value="Log in">
</div>
</form>



</div>

 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>