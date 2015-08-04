<?php include("dbutil/dbconnection.class.php");?>
<?php include("model/user.class.php");?>
<?php include("repository/repository.class.php");?>
<?php
	session_start();
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];

?>
<?php 
	$repository = new repository();


	$user = $repository->get_all();

	foreach($repository->get_all() as $user){
		if($user->get_username() == $_SESSION['username'] && $user->get_password() == $_SESSION['password']){
			$_SESSION['login'] = 1;
			echo("hawa");

		}
	}

	if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
		
		header("Location: admin.php");
	}else{
		
		header("Location: login.php");
	}
?>


