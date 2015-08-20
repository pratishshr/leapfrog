<?php
  session_start();
  include_once("../config/config.php");
  include_once("../system/dbutil/DBConnection.class.php");
  include_once("../system/model/login.class.php");
  $user  = new User();

  if(isset($_POST['submit'])){
    $_SESSION['login'] = $user->check_login($_POST['username'],$_POST['password']);
    if($_SESSION['login']){
      $_SESSION['username'] = $_POST['username'];
      header("Location: ../customer/index.php?page=customer");
      exit;
    }
   }

    
?>

<!DOCTYPE html>
<html>
<head>
  <title>LOG IN</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <!-- Optional theme -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap-theme.min.css">-->
  
  <!-- jQuery -->
  <script src="../assets/js/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container text-center">
  
  <div class="center">
    <div class="page-header">
      <h2>LOG IN</h2>
    </div>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn btn-default" name="submit">Submit</button>
      <div class="form-group">
        <label for="error">
          <?php 
            if(isset($_POST['submit'])){
              if(!$_SESSION['login']){
                echo "Invalid username or Password";
              }
            }
          ?>
        </label>
      </div>
    </form>
   </div> 
</div>



</body>
</html>
<form>
  