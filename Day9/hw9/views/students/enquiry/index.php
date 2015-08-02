<?php require_once(ROOT_PATH."system/dbutil/dbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/model/students.class.php");?>
<?php require_once(ROOT_PATH."system/repository/studentrepository.class.php");?>
<?php
	$studentrepository = new StudentRepository();
	if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action']="delete"){
		$studentrepository->delete($_GET['id']);
		header('Location: index.php');
	}
?>



<?php
	if(isset($_GET['success']) && $_GET['success']== true){
?>		
	
		<div class="alert alert-success" role="alert">Succesfully Inserted!</div>

<?php
	}	
?>

<div class="page-header">
	<h1> Students Table </h1>
</div>



<a href="index.php?page=senquiry&m=add" class="pull-right btn btn-primary btn-sm">Add Student</a>

<table class="table table-hover table-striped">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>CONTACT NO</th>
		<th>COURSE</th>
		<th>ACTION</th>
	</tr>

<?php
	foreach($studentrepository->get_all() as $student){
?>
	<tr>
		<td><?php echo $student->get_id();?></td>
		<td><?php echo $student->get_first_name();?> <?php echo $student->get_last_name();?></td>
		<td><?php echo $student->get_email();?></td>
		<td><?php echo $student->get_contact_no();?></td>
		<td><?php echo $student->get_course();?></td>
		<td><a href="edit.php?id=<?php echo $student->get_id();?>" class="btn btn-primary btn-sm">Edit</a>
		    <a href="index.php?id=<?php echo $student->get_id();?>&action=delete" class="btn btn-danger btn-sm">Delete</a></td>

	</tr>
	

<?php		
	}
?>
</table>



