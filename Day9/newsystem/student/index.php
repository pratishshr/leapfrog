<?php require_once("../config/config.php");?>

<?php include_once("header.php");?>

<?php

if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	echo "<h1>PAGE NOT FOUND</h1>";
	exit;
}


if(array_key_exists($page,$routes)){
	include(ROOT_PATH."controller/".$routes[$page].".php" );
}


?>

<?php include_once("footer.php");?>