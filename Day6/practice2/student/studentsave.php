<?php include_once("header.php"); ?>
<?php 
	if(isset($_POST['submit'])){
	var_dump($_POST);
	}else{
		header("Location:student.php");
	}
?>