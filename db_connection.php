<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "vss_new";
$db_port = "3306";

// create connection 
$conn = new mysqli($db_host , $db_user , $db_password , $db_name , $db_port);

//checking connection 
if($conn->connect_error){
    ?>
    <script>
        alert("Connection failed")
    </script>
    <?php
}
else{
    // echo("connection thai gyu");
}
?> 