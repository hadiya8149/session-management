<?php
session_start();
include 'dbconnection.php';
include 'session_authorization.php';

$email = $_SESSION['email'];


try{
    $getUserDataQuery = "select * from user_profile where user_id = (select user_id from app_user where email='$email');";
    $getUserData = $connection->query($getUserDataQuery);
    $userData=$getUserData->fetch_assoc(); 
}
catch(mysqli_sql_exception $exception){
    $userData = ["could not load data"];
}