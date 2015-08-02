<?php
	require_once('../config/config.php');
?>
<?php
include_once('header.php');
?>

<?php

$page=isset($_GET['page'])?$_GET['page']:'';

if(array_key_exists($page, $routes))
{
	include_once(ROOT_PATH."/controllers/".$routes[$page].".php");
}
else{
	echo "<h1>Page Not Found</h1>";
}
?>

<?php
include_once('footer.php');