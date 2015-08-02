<?php
	session_start();
	if(empty($_SESSION)){
		 header("Location: login.php");
	}else{
		$username = $_SESSION['username'];
	}

?>

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
	<div class="page-header">
		<h1> SUCCESSFULLY LOGGED IN!</h1>
		<h2> WELCOME <?php echo strtoupper($username)?> </h2>
	</div>

<a href="logout.php" class="btn btn-danger btn-sm">Log out</a>

</div>
</body>
</html>



