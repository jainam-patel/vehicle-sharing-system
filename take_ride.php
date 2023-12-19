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
    <title>VSS-Take ride</title>
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

        <li class="nav-item ms-2 me-2"><a href="take_ride.php" class="nav-link btn active"> Take Ride</a></li>
        <li class="nav-item ms-2 me-2"><a href="provide_Ride.php" class="nav-link btn"> Provide Ride</a></li>
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
            echo "<p>Want a ride to office??, request to your colleagues...</p>";
            
         }
         else
         {
            echo "<h1>Welcome to VSS </h1>";
         }
      ?>

<!-- take ride form start -->
<div class="row row-cols-1 row-cols-md-2">
         <div class="col">
            <div class="card">
            <div class="container pt-2 mt-2" id="take_ride" style="background-color:black; color:white">

<h2 class="text-center mb-4 ">Take Ride</h2>
<div class=" row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
        <form action="" class="shadow-lg p-4 was-validated " method="POST">
        
            <div class="form-group form-floating" style="color:#000">
               <select name="Pick_up" id="Pick_up" class="form-control" required >
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
              <label for="Pick_up" class="fw-bold ps-2">Select Pick Up Point</label>
            </div>
            <br>
            <div class="form-group form-floating" style="color:#000">
            <input type="date" id="date_trip" name="Date_trip"  class="form-control"required>
              <label for="Date_trip" class ="fw-bold ps-2">Trip Date</label>
            </div>
            <div class="d-grid gap-2 form-floating">
              <button type="submit" class=" btn btn-outline-primary mt-3 btn-block shadow-sm fw-bold " name="Take_ride">Search Ride</button>
            </div>
            <br>
            <br>
        </form>
    </div>
</div>
</div>
<!-- take ride form end -->
<!-- take ride php start  -->
<?php
if (isset($_SESSION['is_login']))
{
  
  if(isset($_POST['Take_ride']))
  {
    if(($_POST['Pick_up']=="")||($_POST['Date_trip']==""))
    {
      ?>
            <script>alert("Please fill full form!!!");
            </script>
        <?php
    }
    else
    {
      $Pick_up = mysqli_real_escape_string( $conn,$_POST['Pick_up']);
      $date_trip = mysqli_real_escape_string( $conn,$_POST['Date_trip']);
      
      
      $User_id = $_SESSION['User_ID'];
      // $Name = $SESSION['Name'];
      
      $insert_take_trip  = "INSERT INTO `take_ride`(`User_ID`, `Name`,`Date_ride`, `Pickup_point`) VALUES ('$User_id','$Name','$date_trip','$Pick_up')";
      $insert_take_trip_query_res = mysqli_query($conn,$insert_take_trip);
     // echo $insert_take_trip_query_res;
      if ($insert_take_trip_query_res === TRUE) 
      {
        
        ?>
            <!-- <script>
                alert("added ");
                
            </script> -->
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
     location.href ='login.php';
   </script>
   <?php
   
}
?>
<!-- take ride php end  -->
            </div>
         </div>
         <div class="col">
            <div class="card w-auto">
                <!-- search  ride  start -->
<?php 
  if (isset($_SESSION['is_login']))
  { 
    $User_ID = $_SESSION['User_ID'];
    $today_date = date("Y/m/d");
    // date_default_timezone_set('India/');
    // $date = date('m/d/Y h:i:s a', time());
    if(isset($_POST['Take_ride']))
    {
            $fetch_provide_ride="select * from provide_ride where (provide_Date='$date_trip' && (Location_1='$Pick_up' ||Location_2='$Pick_up'||Location_3='$Pick_up'))";
            $query_fetch_provide_ride = mysqli_query($conn,$fetch_provide_ride);
            $provide_ride_count = mysqli_num_rows($query_fetch_provide_ride);
            // echo $provide_ride_count;
            // $provide_ride_data = mysqli_fetch_assoc($query_fetch_provide_ride);
            // $rides= $provide_ride_count;
            // if($provide_ride_count > 0)
            // {
            //   echo ("greater then zero".$provide_ride_count);
            // }
            // else
            // {
            //   echo ("less then 0");
            // }
?>
            
                <?php
                  
                  {?>
                    
                      <h2 class="text-center mb-1 ">Available Rides</h2>
             
               
                  <?php
                  if ($provide_ride_count > 0)
                  {
                    ?>
                    <div class="table-responsive">
                    <table class="table table-hover table-dark">
                    <thead border=1px;>
                    <tr>
                      <th>Name</th>
                      <th>Location 1</th>
                      <th>Location 2</th>
                      <th>Location 3</th>
                      <th>Date</th>
                      <th>Book ride</th>
                    </tr>
                    </thead>
                    <tbody border=1px;<?php
                      while($row = mysqli_fetch_assoc($query_fetch_provide_ride))
                      {?>
                      <tr>
                        <td border=1px;class="mt-3"><?php echo $row['Name']; ?></td>
                        <td border=1px;class="mt-3"><?php echo $row['Location_1']; ?></td>
                        <td border=1px;class="mt-3"><?php echo $row['Location_2']; ?></td>
                        <td border=1px;class="mt-3"><?php echo $row['Location_3']; ?></td>
                        <td border=1px;class="mt-3"><?php echo $row['provide_Date'];?></td>
                        <td border=1px;class="mt-3"><a href="#" name="book_ride">Book Ride</a></td> 
                      </tr>
                      <?php
                        
                        }
                  }
                  else
                  {
                    ?>
                      <script>
                        alert("opps !!!No trip found ");
                      </script>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
                    </div>
                    
                <?php
              }
            //} 

    }         
   }
  // }
  else
  {
    echo ("please login first");
  }
?>
<!-- search  ride  end -->
            </div>
         </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">document.getElementById('date_trip').valueAsDate = new Date();</script>
<!-- class=" btn btn-outline-danger m-1 px-2 btn-block shadow-sm fw-bold "  -->
<!-- style="width:800px; line-height:40px; border:1px solid black;margin-left:auto;margin-right:auto;text-align:center" -->
</body>

</html>