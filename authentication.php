<?php 
if(isset($_SESSION['email'])){
    exit();
}
include 'dbconnection.php';
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = validate($_POST['email']);
        $password= validate($_POST['password']);
        if(empty($email)){
            header("Location: index.php?error=User Name is required");
            exit();
        }
        else if (empty($password)){
            header("Location : index.php?error=Password is required");
            exit();
        }
        else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("location: login.php?error=Invalid email format");
                exit();
            }
            else{
                $query = "SELECT * FROM app_user where email='$email';";
                $result = $connection->query($query);
    
                if($result->nums_rows===0){
                    echo"user does not exists";
                    header("location: login.php?error=Account not found. Please signup first");
                    exit();
                }
                else{
                    $resultArray = $result->fetch_assoc();
                    $storedHash = $resultArray['password'];
                        if(password_verify($password, $storedHash)){
                            // don't store email in cookies use another way 
                            session_start();
                            $_SESSION['email']=$email;
                            setcookie("usertoken", "noice", time()+86400 * 30);
                            header("location: home.php");
                            exit();
                        }
                        else{
                            header("location: login.php?error='incorrect password'");
                        }
                    
                }
            }
       
        
        }
    }
    else{
        echo "password and email not set";
    }
}
