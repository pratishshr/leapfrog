<?php include_once("../config/config.php"); ?>

<?php include_once("header.php");?>

<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];

}else{
	$page = 'index';
	exit;	
}

if(array_key_exists($page, $routes)){
	include_once(ROOT_PATH."/controllers/".$routes[$page].".php");
}
?>
<?php include_once("footer.php");?>