<?php
  include("db_connection.php");

//   start of login php
  //session_start();
  if(!isset($_SESSION['is_login']))
  {
      if(isset($_POST['login']))
      {
      if(($_POST['uid']=="")||($_POST['pass']==""))
      {
        ?>
              <script>alert("Please fill full form!!!");
              </script>
        <?php
      }
      else
      {
        $uid = trim(mysqli_real_escape_string ($conn,$_POST['uid']));
        $pass = trim(mysqli_real_escape_string( $conn,$_POST['pass']));
        
  
        $empid_check = "select * from reg_user where Email='$uid' ";
        $phone_check = "select * from reg_user where phone='$uid' ";
  
        $emp_id_check_query = mysqli_query($conn,$empid_check);
        $emp_phone_check_query = mysqli_query($conn,$phone_check);
  
        $emp_id_count = mysqli_num_rows($emp_id_check_query);
        $emp_phone_count = mysqli_num_rows($emp_phone_check_query);
  
          if($emp_id_count>0 || $emp_phone_count>0)
          {
            $login_email="select * from reg_user where (Email='$uid') and (Password='$pass') or (Phone='$uid') and (Password='$pass')";
            $login_email_check_query = mysqli_query($conn,$login_email);
            $login_email_count = mysqli_num_rows($login_email_check_query);

            
            // $login_phone="select Name from reg_user where (Phone='$uid') and (Password='$pass')";
            // $login_phone_check_query = mysqli_query($conn,$login_phone);
            // $login_phone_count = mysqli_num_rows($login_phone_check_query);
            if($login_email_count==1)
            {
              session_start();
              $user_data = mysqli_fetch_assoc($login_email_check_query);
              $_SESSION['is_login']   = true;
              $_SESSION['Name']       = $user_data['Name'];
              $_SESSION['Email']      = $user_data['Email'];
              $_SESSION['Phone']      = $user_data['Phone'];
              $_SESSION['Department'] = $user_data['Department'];
              $_SESSION['Gender']     = $user_data['Gender'];
              $_SESSION['User_ID']    = $user_data['User_ID'];
              
                
              ?>
              <script>
                
                location.href='index.php';
                alert("Log in successfull welcome <?php echo $_SESSION['Name'];?>")
               </script>
              <?php
              
            }
            else
            {
              ?>
              <script>
                alert("Login failed :(");
              </script>
              <?php
            }
          }
          else
          {
              ?>
              <script>
                alert("user not found please sign up !!");
              </script>
              <?php
          }
      }
    }
  }
  else
  {
    ?>
      <script>
        alert("Ek var to login karyu have ketli var karvu che bhai !!!<?php echo $_SESSION['Name'];?>");
        // location.href='index.php';
      </script>
      <!-- End of login php -->
      <?php
  }
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
    <title>VSS-Log in</title>
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
                      <li><a class="dropdown-item  active" href="login.php">login</a></li>
              <?php
                }
              ?>

              <li><a class="dropdown-item" href="signup.php">Register new Account</a></li>
              <li><hr class="dropdown-divider"></li>

              <!-- <li><a class="dropdown-item" href="me_logout.php">Log out</a></li> -->
              
              <?php
                if(isset($_SESSION['is_login']))
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
        <!-- <li class="nav-item ms-2 me-2"><a href="index.php#aboutus" class="nav-link btn"> About Us</a></li> -->
    </ul>
</div>
</nav>
<!-- End Navigation -->
<!-- start of login form -->
  <div class="container pt-5 mt-5" id="login">

<h2 class="text-center mb-5 fmhdr">Log In</h2>
<div class=" row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
        <form action="" class="shadow-lg p-4 was-validated" method="POST">
        
            <div class="form-group form-floating ">
                <input type="text" class="form-control " placeholder="Enter email/phone number" name="uid" id="uid" required >
                <label for="uid">Email/ Phone number</label>
            </div>
            <br>
            <div class="form-group form-floating">
                <input type="password"  class="form-control" minlength="8" maxlength="10" placeholder="Password" name="pass"  required >
                <label for="pass">Password</label>
            </div>
            <br>
            <div class="d-grid gap-2 form-floating">
                <button type="submit" class=" btn btn-outline-primary mt-3 btn-block shadow-sm fw-bold " name="login">Log in</button>
            </div>
            <br>
            <div class="d-grid gap-2 form-floating">
                <a href="signup.php" class=" btn btn-outline-danger mt-3 btn-block shadow-sm fw-bold " name="signup">Sign UP</a>
            </div>
            <br>
        </form>
    </div>
</div>
</div>

<br><br><br><br><br>
<!-- end of login form -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>