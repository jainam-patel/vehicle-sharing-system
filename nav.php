<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="navo-nav.css" />
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index1.php" class="active" style="color:black;">VSS</a>
  <a href="index1.php">Home</a>
  <a href="take_ride1.php">Take Ride</a>
  <a href="provide_ride1.php">Give Ride</a>
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
                      <a class="dropdown-item disabled" href="login1.php">login</a>
                  <?php
                }
                else
                {
              ?>
                      <a class="dropdown-item" href="login1.php">login</a>
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

</body>
</html>
