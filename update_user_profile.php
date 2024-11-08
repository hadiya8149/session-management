<?php 
include "dbconnection.php";
include 'config.php';
include 'session_authorization.php';
$address = $_POST['address'];
$email = $_SESSION['email'];
try{

    $stmt = $connection->prepare("UPDATE user_profile SET address=? WHERE user_id = (SELECT user_id FROM app_user WHERE email=?)");
    $stmt->bind_param("ss", $address, $email);
    $stmt->execute();
    header("location: home.php");
}
catch(mysqli_sql_exception $exception){
    header("location: home.php?error=Please try again later.");
}
