<?php
require('config.php');
//session_start();
//echo 'hello';
if(isset($_POST['submit']))
{
    //echo 'hii';
    $name =  $_POST['name'];
    $dob =  $_POST['dob'];
    $age =  $_POST['age'];
    $sex =  $_POST['sex'];
    $phone_no = $_POST['phone_no'];
    $location = $_POST['location'];
    $password = $_POST['password'];

 $sql = "INSERT INTO patient(name, dob, age, sex, phone_no, location,password)VALUES('$name','$dob','$age','$sex','$phone_no','$location','$password')";
 

if ($conn->query($sql) === TRUE)
 {
   // echo "New record created successfully";
   header("location: log.php");
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
  $conn->close();
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
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="reg.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="log.php">Login</a>
      </li>  
     
    </ul>
  </div>
</nav>

<div class="container mt-4">
<h3>Please Register Here:</h3>
<hr>

<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputDob">Dob</label>
      <input type="date" class="form-control" name="dob" id="inputDob" placeholder="Dob">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAge">Age</label>
      <input type="text" class="form-control" name="age" id="inputAge" placeholder="Age">
    </div>
    <div class="form-group col-md-6">
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
    </div>
  </div>
  


  <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>