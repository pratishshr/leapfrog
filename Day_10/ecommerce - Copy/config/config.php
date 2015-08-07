<?php
	define('BASE_URL','http://localhost/leapfrog/Day_10/ecommerce');
	define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT'].'leapfrog/Day_10/ecommerce');

	define('HOSTNAME','localhost');
	define('USERNAME','root');
	define('PASSWORD','damcare');
	define('DATABASE','hw_ecommerce');

	include_once("routes.php");
	include_once(ROOT_PATH."/system/dbutil/DBConnection.class.php");
?>