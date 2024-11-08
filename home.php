<?php 
include 'display_user_data.php';
include "navbar.php";
?>
<!DOCTYPE html5>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="css/home.css">
</head>
<body>
    <h1>User Profile</h1>
    <div class="container m-auto">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div>
            <div class="card">
              <h1 class="card-title">Personal Details</h1>
              <div class="card-body">
              <p><h5>Name </h5><?php echo $userData['first_name']. ' '.$userData['last_name'];?></p>

                <p><h5>Date of Birth: </h5><?php echo $userData['date_of_birth'];?></p>
                <p><h5>Gender: </h5><?php echo $userData['gender'];?></p>
                <p><h5>CNIC number: </h5><?php echo $userData['cnic'];?></p>
                <p><h5>Address: </h5><?php echo $userData['address'];?></p>

              </div>
</div>
          </div>
            <div class='form-container'>
    <h4>Change Address</h4>
    <p class="error">
    <?php if(isset($_GET['error'])){
         echo $_GET['error'];   
    }
    ?>

    </p>
            <form action='update_user_profile.php' method='post'>
  <div class="form-row" style="margin:25px;">

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <textarea class="form-control" style="height:100px;" name="address" placeholder="Enter Address"></textarea>
  </div>

 

  </div>
  <div class="text-center">

  <button type="submit" name='submit' class="btn btn-primary m-auto w-75" >submit</button>
</div>
</form>
            

            </div>
        </div>
</div>
</body>    
</html>
