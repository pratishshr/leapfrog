

<!DOCTYPE html>
<html>
<head>
	<title>Log in Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap-theme.min.css">-->
	
	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid col-md-4">
<form action="check.php" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>



