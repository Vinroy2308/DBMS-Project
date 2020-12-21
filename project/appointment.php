<?php
require('config.php');
session_start();
if(!isset($_SESSION['admin_name']))
{
    echo "errrooor";
    header("location: adlog.php");
 }
 if(isset($_POST['book']))
 {
    $id= $_SESSION['id'];
    $apnt_date=$_POST['apnt_date'];
    $apnt_time=$_POST['apnt_time'];
    
    
    $sql= "INSERT into appointment(id,apnt_date,apnt_time)VALUES($id,'$apnt_date','$apnt_time');";
    $result=mysqli_query($conn,$sql);
    if ($result ==1)
   {
   // echo "New record created successfully";
   header("location: admin.php");
   } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Medbay</title>
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
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="reg.php">Register</a>
      </li> -->
      <li class="nav-item active">
        <a class="nav-link" href="appointment.php">Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adout.php">Logout</a>
      </li>    
     
    </ul>
  </div>
</nav>

<div class="container mt-4">
<h3>Book Appointment:</h3>
<hr>

<form action= "" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDate">Appointment Date :</label>
      <input type="date" class="form-control" name="apnt_date" id="inputDate" placeholder="Enter Date">
    </div>
    <!-- <div class="form-group col-md-6">
      <label for="inputDob">Dob</label>
      <input type="date" class="form-control" name="dob" id="inputDob" placeholder="Dob">
    </div> -->
    <div class="form-group col-md-6">
      <label for="inputTime">Appointment Time</label>
      <input type="time" class="form-control" name="apnt_time" id="inputTime" placeholder="Enter Time">
    </div>
    <!-- <div class="form-group col-md-6">
      <label for="inputSex">Sex</label>
      <input type="text" class="form-control" name ="sex" id="inputSex" placeholder="Sex">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPhone">Phone no</label>
      <input type="text" class="form-control" name="phone_no" id="inputPhone" placeholder="Phone no">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLocation">Location</label>
      <input type="text" class="form-control" name="location" id="inputLocation" placeholder="Location">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
    </div> -->
  </div>
  


  <button type="submit" class="btn btn-primary" name="book">BOOK</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>