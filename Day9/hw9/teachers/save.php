<?php require_once("config.php");?>
<?php require_once(ROOT_PATH."system/model/teachers.class.php");?>
<?php require_once(ROOT_PATH."system/repository/teacherrepository.class.php");?>
<?php require_once(ROOT_PATH."system/dbutil/dbconnection2.class.php");?>

<?php include_once(ROOT_PATH."teachers/header.php");?>

<?php 
	if(!isset($_POST['submit'])){
		header("Location: index.php");	
		exit;
	}

	$teacher = new Teachers();

	
	$teacher->set_first_name($_POST['first_name']);
	$teacher->set_last_name($_POST['last_name']);
	$teacher->set_email($_POST['email']);
	$teacher->set_contact_no($_POST['contact_no']);
	$teacher->set_faculty($_POST['faculty']);

	$teacherrepository  = new TeacherRepository();

	
	if(isset($_POST['id']) && $_POST['id']==""){
		
	$result = $teacherrepository->insert($teacher);
	}else{
		$teacher->set_id($_POST['id']);
		$result = $teacherrepository->update($teacher);
		
		
	}

	if($result > 0){
		header("Location: index.php/?success=true");
	}

?>