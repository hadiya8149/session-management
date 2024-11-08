<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<nav>
      <div class="logo">
        <h2>Demo</h2>
      </div>
      <div class="nav-items">
        <ul class="overview">
          <li><a href="/programersforce/index.php">Home</a></li>
          <?php
          
          ?>
          <?php 
          if(isset($_SESSION['email'])){
            echo "<li><a  href='/programersforce/logout.php'>Logout</a></li>";
          }
          else{
            
          echo "<li><a href='/programersforce/login.php'>Login</a></li>";
          echo "<li><a href='/programersforce/register.php'>Register</a></li>";
          }      ;    
          ?>

        </ul>
 
      </div>
</nav>
