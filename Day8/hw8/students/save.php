<?php include_once("config.php");?>
<?php include_once(ROOT_PATH."students/header.php");?>
<?php require_once(ROOT_PATH."system/models/students.class.php");?>
<?php require_once(ROOT_PATH."system/dbutil/dbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/repository/studentrepository.class.php");?>
<?php 

 $students = new Students();

$students->set_first_name($_POST['first_name']);
$students->set_last_name($_POST['last_name']);
$students->set_email($_POST['email']);
$students->set_contact_no($_POST['first_name']);
$students->set_course($_POST['course']);

$studentrepository = new StudentRepository();

$success=false;
if(isset($_POST['id']) && $_POST['id']==''){
	$result = $studentrepository->insert($students);
}else
{
	$result = $studentrepository->update($students);
}


if($result > 0){
	header("location:index.php?success=true");
}else{
	header("location:index.php?error=true");

}
exit();

?>