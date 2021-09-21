<?php

$servername = "localhost:3307s";
$username = "root";
$password = "";
$dbname = "sparks_bank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

   if($conn){
       echo"Successfully connected to database <br>";
   }
   else{
       echo"Failed to connect to the database";
   }
?>