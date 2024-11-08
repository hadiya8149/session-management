<?php
$host ="localhost";
$user= "root";
$pass= "";
$database = "php_app";
$connection = new mysqli($host, $user, $pass, $database);

if($connection->connect_error){
    echo "Failed to connnect DB".$connection->connect_error;
}
else{
    echo '<script>console.log("connected to database")</script>';
}
