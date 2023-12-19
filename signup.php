<?php
include('db_connection.php');
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
    <title>VSS-Sign Up</title>
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
         <!-- <li><a class="dropdown-item active" href="profile.php">Visit Profile</a></li> -->

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
<!-- Start registration form -->
<div class="container pt-5 mt-5" id="registration">
<br>
    <h2 class="text-center mb-5 fmhdr">Create an Account</h2>
    <div class=" row mt-2 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4 was-validated" method="POST">
            
                <div class="form-group form-floating requ">
                    <input type="text" class="form-control " placeholder="name" name="name" id="name"required  >
                    <label for="name">Name</label>
                </div>
                <br>
                <div class="form-group form-floating">
                    <input type="tel"  class="form-control"  placeholder="Phone number" name="phone" required  >
                    <label for="phone">Phone Number</label>
                    <small class="form-text">We'll naver share your phone number with anyone else..</small>
                </div>
                <br>
                <div class="form-group form-floating ">
                    <input type="email" class="form-control " placeholder="Employee Email ID" name="email" id="email" required >
                    <label for="email">Email ID</label>
                </div>
                <br>
                <div class="form-group form-floating">
                    <input type="password" class="form-control" minlength="8" maxlength="10" placeholder="password" name="password" required >
                    <label for="password">Password</label>
                </div>
                <br>
                <div class="form-group form-floating">
                    <input type="password" class="form-control" minlength="8" maxlength="10" placeholder="re-password" name="rpassword"  required>
                    <label for="rpassword">Re-Enter password</label>
                </div>
                <br>
                <div class="form-group form-floating">
                    <select name="department" id="department" class="form-control" required >
                        <option selected disabled value="">Choose...</option>
                        <option value="HrR"> HR</option>
                        <option value="Testing">Testing</option>
                        <option value="Development">Development</option>
                        <option value="Devops">Devops</option>
                    </select>
                    <label for="department" class="fw-bold ps-2">Select Department</label>
                </div>
                <br>
                <div class="form-group form-floating">
                    <select name="gender" id="gender" class="form-control" required >
                        <option selected disabled value="">Choose...</option>
                        <option value="male"> Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label for="gender" class="fw-bold ps-2">Select Gender</label>
                </div>
                <br>
                <div class="d-grid gap-2 form-floating">
                    <button type="submit" class=" btn btn-danger mt-3 btn-block shadow-sm fw-bold " name="signup">Sign Up</button>
                </div>
                <br>
                <em style="font-size: 10px;"> Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.</em>
          </form>
        </div>
    </div>
</div>

<!-- End registration form -->
<!-- registration php start -->
<?php
if(isset($_POST['signup']))
{
    if(($_POST['name']=="")||($_POST['phone']=="")||($_POST['email']=="")||($_POST['password']=="")||($_POST['rpassword']=="")||($_POST['department']=="")||($_POST['gender']==""))
    {
        ?>
            <script>alert("Please fill full form!!!");
            </script>
        <?php
    }
    else
    {  
            $name         =mysqli_real_escape_string( $conn,$_POST['name']);
            $phone        =mysqli_real_escape_string( $conn, $_POST['phone']);
            $email        =mysqli_real_escape_string( $conn, $_POST['email']);
            $password     =mysqli_real_escape_string( $conn,$_POST['password']);
            $rpassword    =mysqli_real_escape_string( $conn,$_POST['rpassword']);
            $department   =mysqli_real_escape_string( $conn, $_POST['department']);
            $gender       =mysqli_real_escape_string( $conn,$_POST['gender']);

            $empid_check = "select * from reg_user where (Email='$email') or (Phone='$phone') ";
            $emp_check_query = mysqli_query($conn,$empid_check);
            $empid_count = mysqli_num_rows($emp_check_query);
            if($empid_count>0)
            {
                ?>
                    <script>
                        alert("already registred please login !!");
                    </script>
                <?php
            }
            else
            {
                if(($_POST['password'])!=($_POST['rpassword']))
                {
                    ?>
                        <script>
                            alert("Please enter same password");
                        </script>
                    <?php
                }
                else
                {
                    $insert_quary = "INSERT INTO `reg_user`(`Name`, `Phone`, `Email`, `Password`, `Department`, `Gender`) VALUES ('$name','$phone','$email','$password','$department','$gender')";
                    $insert_query_res = mysqli_query($conn,$insert_quary);

                    if ($insert_query_res === TRUE) 
                    {
                        ?>
                            <script>
                                alert("Registred successfully");
                                location.href='index.php';
                            </script>
                        <?php
                    } 
                    else
                    {
                        ?>
                            <script>
                                alert("Registred Failed");
                            </script>
                        <?php
                    }
                    
                }
            }
        
    }
}

?>
<!-- registration php end -->

    <!-- <a href="index.php"class = "btn btn-outline-danger">Go back to home page</a>
    <a href="profile.php"class = "btn btn-outline-danger">Go back to log in page</a> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>