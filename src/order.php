<?php
$servername = "mysql";
$username = "php";
$password = "php";

// Create connection
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
//
// Check connection
 if (!$manager) {
   die("Connection failed: ");
   }
   echo "Mongo connected successfully! <br>";
   echo "Server Info: ";
?>