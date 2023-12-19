<?php
  include('db_connection.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="nav.css"> -->
    <link rel="stylesheet" href="edit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>VSS-Provide Ride</title>
    <style>
      .form-group{
        color: black;
      }
    </style>
</head>
<body>
<!-- Start Navigatiion -->
<nav class="navbar navbar-expand-md navbar-light ps-4 fixed-top text-a "> 
   <a href="index.php" class="navbar-brand "> 
      <h4 class="d-inline ps-2" id="logo">VSS</h4>
   </a>

   <button type="button" class="navbar-toggler btn btn-outline-info" data-bs-toggle="collapse" data-bs-target="#mymenu">
      <span class="navbar-toggler-icon" ></span>
   </button>

   <div class="collapse navbar-collapse" id="mymenu">
      <ul class="navbar-nav nav-tabs nav-pills ps-5">
         <li class="nav-item ms-2 me-2 "><a href="index.php" class="nav-link btn"> Home</a></li>
         <li class="nav-item dropdown ms-2 me-2">
            <a class="nav-link btn dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
               Profile
            </a>
         <ul class="dropdown-menu bg-light" >
         <!-- <li><a class="dropdown-item" href="profile.php">Visit Profile</a></li> -->

              <!-- <li><a class="dropdown-item" href="me_login.php">login</a></li> -->

              <?php
                if( isset($_SESSION['is_login']))
                {
                  ?>
                      <li><a class="dropdown-item disabled" href="login.php">login</a></li>
                  <?php
                }
                else
                {
              ?>
                      <li><a class="dropdown-item" href="login.php">login</a></li>
              <?php
                }
              ?>

              <li><a class="dropdown-item" href="signup.php">Register new Account</a></li>
              <li><hr class="dropdown-divider"></li>

              <!-- <li><a class="dropdown-item" href="me_logout.php">Log out</a></li> -->
              
              <?php
                if( isset($_SESSION['is_login']))
                {
                  ?>
                      <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                  <?php
                }
                else
                {
              ?>
                      <li><a class="dropdown-item disabled" href="logout.php">Log out</a></li>
              <?php
                }
              ?>

            </ul>
         </li>

        <li class="nav-item ms-2 me-2"><a href="take_ride.php" class="nav-link btn "> Take Ride</a></li>
        <li class="nav-item ms-2 me-2"><a href="provide_ride.php" class="nav-link btn active"> Provide Ride</a></li>
        <!-- <li class="nav-item ms-2 me-2"><a href="index.php#about_us" class="nav-link btn"> About Us</a></li> -->
        <!-- <li class="nav-item ms-2 me-2"><a href="admin_login.php" class="nav-link btn"> Admin login</a></li> -->
    </ul>
</div>
</nav>
<br><br><br><br>
<!-- End Navigation -->
<?php
      
         if(isset($_SESSION['is_login'])) 
         {
            $Name=$_SESSION['Name'];
            echo "<h1>Hello {$Name},</h1>";
            echo "<p>Going Alone??, post a ride and share it with your colleagues...</p>";
           
            
         }
         else
         {
            echo "<h1>Welcome to VSS </h1>";
         }
?>
<!-- Provide ride form start -->
<div class="card" style="background-color:black; color:white;">
<div class="container pt-3 mt-3" id="Provide_ride">

<h2 class="text-center mb-5 ">Provide Ride</h2>
<div class=" row mt-3 mb-3">
    <div class="col-md-6 offset-md-3">
        <form action="" class="shadow-lg p-4 was-validated " method="POST">
        
            <div class="form-group form-floating">
               <select name="loc_1" id="loc_1" class="form-control" required >
                  <option selected disabled value="">Choose...</option>
                  <option value="Bakrol "id="Bhaikaka"> Bakrol</option>
                  <option value="APC" id="APC">APC Circle</option>
                  <option value="Janta" id="Janta">Janta Circle</option>
                  <option value="Bhaikaka" id="Bhaikaka">BhaiKaka Circle</option>
                  <option value="Busstand" id="Busstand">Anand New Bus Stand</option>
                  <option value="Railwayst" id="Railwayst">Anand Railway Station</option>
                  <option value="Shaheedchowk" id="Shaheedchowk">Shaheed Chowk</option>
                  <option value="Ganesh" id="Ganesh">Ganesh Chowkdi</option>
                  <option value="Sanket" id="Sanket">Sanket India</option>
                  <option value="Karamsad" id="Karamsad">Karamsad Chowkdi</option>
                  <option value="Adit" id="Adit">ADIT Campus</option>
                </select>
              <label for="loc_1" class="fw-bold ps-2">Select Nearby Area</label>
            </div>
            <br>

            <div class="form-group form-floating">
               <select name="loc_2" id="loc_2" class="form-control" required >
                  <option selected disabled value="">Choose...</option>
                  <option value="Bakrol "id="Bhaikaka"> Bakrol</option>
                  <option value="APC" id="APC">APC Circle</option>
                  <option value="Janta" id="Janta">Janta Circle</option>
                  <option value="Bhaikaka" id="Bhaikaka">BhaiKaka Circle</option>
                  <option value="Busstand" id="Busstand">Anand New Bus Stand</option>
                  <option value="Railwayst" id="Railwayst">Anand Railway Station</option>
                  <option value="Shaheedchowk" id="Shaheedchowk">Shaheed Chowk</option>
                  <option value="Ganesh" id="Ganesh">Ganesh Chowkdi</option>
                  <option value="Sanket" id="Sanket">Sanket India</option>
                  <option value="Karamsad" id="Karamsad">Karamsad Chowkdi</option>
                  <option value="Adit" id="Adit">ADIT Campus</option>
                </select>
              <label for="loc_2" class="fw-bold ps-2">Select Nearby Area</label>
            </div>
            <br>

            <div class="form-group form-floating">
               <select name="loc_3" id="loc_3" class="form-control"  required>
                  <option selected disabled value="">Choose...</option>
                  <option value="Bakrol "id="Bhaikaka"> Bakrol</option>
                  <option value="APC" id="APC">APC Circle</option>
                  <option value="Janta" id="Janta">Janta Circle</option>
                  <option value="Bhaikaka" id="Bhaikaka">BhaiKaka Circle</option>
                  <option value="Busstand" id="Busstand">Anand New Bus Stand</option>
                  <option value="Railwayst" id="Railwayst">Anand Railway Station</option>
                  <option value="Shaheedchowk" id="Shaheedchowk">Shaheed Chowk</option>
                  <option value="Ganesh" id="Ganesh">Ganesh Chowkdi</option>
                  <option value="Sanket" id="Sanket">Sanket India</option>
                  <option value="Karamsad" id="Karamsad">Karamsad Chowkdi</option>
                  <option value="Adit" id="Adit">ADIT Campus</option>
                </select>
              <label for="loc_3" class="fw-bold ps-2">Select Nearby Area</label>
            </div>
            <br>
            <div class="form-group form-floating">
            <input type="date" id="provide_date_trip" name="provide_Date_trip"  class="form-control"required>
              <label for="provide_date_trip" class ="fw-bold ps-2">provide trip Date</label>
            </div>
            <div class="d-grid gap-2 form-floating">
              <button type="submit" class=" btn btn-outline-primary mt-3 btn-block shadow-sm fw-bold " name="provide_ride">Post Ride</button>
            </div>
            <br>
            <br>
        </form>
    </div>
</div>
</div>
<!-- Provide ride form end -->
<!-- Provide ride php start  -->
<?php
if (isset($_SESSION['is_login']))
{
  
  if(isset($_POST['provide_ride']))
  {
    if(($_POST['loc_1']=="")||($_POST['loc_2']=="")||($_POST['loc_3']=="")||($_POST['provide_Date_trip']==""))
    {
      ?>
            <script>alert("Please fill full form!!!");
            </script>
        <?php
    }
    else
    {
      $loc_1    = mysqli_real_escape_string( $conn,$_POST['loc_1']);
      $loc_2    = mysqli_real_escape_string( $conn,$_POST['loc_2']);
      $loc_3    = mysqli_real_escape_string( $conn,$_POST['loc_3']);
      $provide_Date_trip  = mysqli_real_escape_string( $conn,$_POST['provide_Date_trip']);
      
      
      $User_id = $_SESSION['User_ID'];
      
      
      $insert_provide_trip  ="INSERT INTO `provide_ride`(`User_ID`, `Name`, `Location_1`, `Location_2`, `Location_3`, `provide_Date`) VALUES ('$User_id','$Name','$loc_1','$loc_2','$loc_3','$provide_Date_trip')";
      $insert_provide_trip_query_res = mysqli_query($conn,$insert_provide_trip);
      
      if ($insert_provide_trip_query_res === TRUE) 
      {
        
        ?>
            <script>
                alert("added ");
                
            </script>
        <?php
      } 
      else
      {
        ?>
        <script>
          alert("Adding trip failed");
        </script>
        <?php
      }

    }
  }
}
else
{
   ?>
     <script>alert("Please Login first!!!");
     //location.href ='login.php';
   </script>
   <?php
   
}
?>
<!-- Provide ride php end  -->
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>