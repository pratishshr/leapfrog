<?php 
	session_start();
	if(!isset($_SESSION['logged_in']))
	{
		header("location:index.php");
	}
?>
This is secured page