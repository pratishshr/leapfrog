<?php
	session_start();
	if(!isset($_SESSION['login'])){

		header("Location: login.php");
	}else{
		echo "User: ". $_SESSION['username']."!";
	}

?>	

<?php include_once("../config/config.php");?>

<?php include_once("header.php");?>


<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		echo "<h1>PAGE NOT FOUND</h1>";
		exit;
	}

	if(array_key_exists($page, $routes)){
		include(ROOT_PATH."/controllers/".$routes[$page].".php");
	}else{
		echo "<h1>PAGE NOT FOUND</h1>";
	}
?>


<?php include_once("footer.php");?>

