<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- linking  -->
    <!-- <link rel="stylesheet" href="nav.css"> -->
    <link rel="stylesheet" href="edit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>VSS-Profile</title>
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
         <li class="nav-item ms-2 me-2 "><a href="index.php" class="nav-link btn  "> Home</a></li>
         <li class="nav-item dropdown ms-2 me-2">
            <a class="nav-link btn dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
               Profile
            </a>
         <ul class="dropdown-menu bg-light" >
         <li><a class="dropdown-item active" href="profile.php">Visit Profile</a></li>

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

        <li class="nav-item ms-2 me-2"><a href="take_ride.php" class="nav-link btn"> Take Ride</a></li>
        <li class="nav-item ms-2 me-2"><a href="Provide_ride.php" class="nav-link btn"> Provide Ride</a></li>
        <!-- <li class="nav-item ms-2 me-2"><a href="index.php#about_us" class="nav-link btn"> About Us</a></li> -->
    </ul>
</div>
</nav>

<!-- End Navigation -->
<br><br><br><br><br>
<?php
      
         if(isset($_SESSION['is_login'])) 
         {
            $Name=$_SESSION['Name'];
            echo "<h1>Hello {$Name},</h1><h3> Welcome to VSS</h3>";
           
            
         }
         else
         {
            echo "<h1>Welcome to VSS </h1>";
         }
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>