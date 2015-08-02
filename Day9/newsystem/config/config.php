<?php
	define('BASE_URL','http://localhost/leapfrog/Day9/newsystem/');
	define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']."leapfrog/Day9/newsystem/");

	include_once(ROOT_PATH."system/helpers/LoadHelper.php");
	

	define('HOSTNAME','localhost');
	define('USERNAME','root');
	define('PASSWORD','damcare');
	define('DATABASE','academy_hw');

	include_once(ROOT_PATH."system/dbutil/dbconnection.class.php");
	include_once("routes.php");



?>