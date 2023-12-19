<?php
    session_start();
    //session_destroy();  
    if( isset($_SESSION['is_login']))
    {
    ?>
              <script>
                
                location.href='login.php';
                alert("log out thai gyu bye <?php echo $_SESSION['Name'];?>")
               </script>
              <?php
              session_destroy();
    }
    else
    {
        ?>
        <script> 
        alert("log out fail!!! try after some time... ");
        location.href('index.php');
      </script>
     <?php
     echo ("fail");
    }
    
?>