<?php require_once("config.php");?>
<?php require_once(ROOT_PATH."system/dbutil/dbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/model/students.class.php");?>
<?php require_once(ROOT_PATH."system/repository/studentrepository.class.php");?>

<?php include_once("header.php");?>

<?php
	if(!isset($_POST['submit'])){
		header('Location: index.php');
		exit;
	}

	

	
	$result=0;

	if(isset($_POST['id']) && $_POST['id']==''){
		echo "im here";
		$result = $studentrepository->insert($students);
	}else{
		$students->set_id($_POST['id']);
		$result = $studentrepository->update($students);

	}

	if($result > 0){
	 		header("Location: index.php?success=true");
	 }




?>