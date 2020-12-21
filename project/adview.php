<?php
require('config.php');
session_start();
if(!isset($_SESSION['admin_name']))
{
    header("location: adlog.php");
}
 $id=$_SESSION['id'];
 $sql1= "SELECT * FROM patient WHERE id=".$id;
 $result1= mysqli_query($conn,$sql1);
 $sql2= "SELECT * FROM medicine m,prescription p WHERE m.mno=p.mno and p.id=".$id;
 $result2=mysqli_query($conn,$sql2);
 $sql3="SELECT * FROM appointment WHERE id=".$id;
 $result3=mysqli_query($conn,$sql3);

 if(isset($_POST['cancel'])){
     $sql4= "DELETE FROM appointment WHERE id =".$id;
     $result4=mysqli_query($conn,$sql4);
    //  if($result4){
    //      header("location : adview.php");
    //  }
 }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medbay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="stylereg.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
        <img src="images/doc.png" alt="...">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="admin.php">Home</a>
              </li>
              <li class="nav-item">
                <a href="adview.php" class="nav-link active">Details</a>
              </li>
              <li class="nav-item">
                <a href="adout.php" class="nav-link">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-1">
          <?php if(mysqli_num_rows($result1)>0){
              if($row1=mysqli_fetch_assoc($result1)){?>
           <p><b>Id : </b><?php echo $row1['id']; ?> </p>
          <p><b>Name : </b><?php echo $row1['name']; ?> </p>
          
          <?php }} ?>
         
          
      </div>

      <div class="container">
          <p><b>PRESCRIPTION:</b></p>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Medicine Number</th>
      <th scope="col">Medicine Name</th>
      <th scope="col">Dosage</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <!-- <th scope="col">Active</th> -->
    </tr>
  </thead>
  
  <tbody>
      <?php if(mysqli_num_rows($result2)>0){
          while($row2= mysqli_fetch_assoc($result2))
          {?>
            <tr>
              <td><?php echo $row2['mno']; ?></td>
              <td><?php echo $row2['mname']; ?></td>
              <td><?php echo $row2['dosage']; ?></td>
              <td><?php echo $row2['start_date']; ?></td>
              <td><?php echo $row2['end_date']; ?></td>
              
            </tr>
         <?php } }
         else
         {
             echo "No records found";
         }                        
         ?> 
  </tbody>
</table>
</div>
<!-- appointment table -->
<div class="container">
          <p><b>APPOINTMENT:</b></p>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Appointment Number</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Appointment Time</th>
      <th scope="col">Action</th>
      
      <!-- <th scope="col">Active</th> -->
    </tr>
  </thead>
  
  <tbody>
      <?php if(mysqli_num_rows($result3)>0){
          while($row3= mysqli_fetch_assoc($result3))
          {?>
            <tr>
              <td><?php echo $row3['apnt_no']; ?></td>
              <td><?php echo $row3['apnt_date']; ?></td>
              <td><?php echo $row3['apnt_time']; ?></td>
              <td> <form action="" method="POST"> 
                      <!-- <input type="hidden" name="user_id" value="<php echo $row['id']; ?>"> -->
                    <button class="btn btn-success" name="cancel" type ="submit"> Cancel Appointment</button>
                  </form>
             </td>
                            
            </tr>
         <?php } }
         else
         {
             echo "No records found";
         }                        
         ?> 
  </tbody>
</table>
</div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    


</body>
</html>