<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="navo-nav.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php"  style="color:black;">VSS</a>
  <a href="index.php"class="active">Home</a>
  <a href="take_ride.php">Take Ride</a>
  <a href="provide_ride.php">Give Ride</a>
  <div class="dropdown">
    <button class="dropbtn">My Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Visit Profile</a>
      <!-- <a href="#">Login</a> -->
      <?php
                if( isset($_SESSION['is_login']))
                {
                  ?>
                      <a class="dropdown-item disabled" href="login.php">login</a>
                  <?php
                }
                else
                {
              ?>
                      <a class="dropdown-item" href="login.php">login</a>
              <?php
                }
              ?>

              <!-- <li><a class="dropdown-item" href="signup.php">Register new Account</a></li> -->
      <a href="signup.php">Register new account</a>
      <hr>
      <!-- <a href="#">Logout</a> -->
      <?php
                if( isset($_SESSION['is_login']))
                {
                  ?>
                      <a class="dropdown-item" href="logout.php">Log out</a>
                  <?php
                }
                else
                {
              ?>
                      <a class="dropdown-item disabled" href="logout.php">Log out</a>
                      <?php
                }
              ?>
    </div>
  </div> 
  <a href="#">Feedback</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<!-- <div style="padding-left:16px">
  <h2>Responsive Topnav with Dropdown</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
</div> -->

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
