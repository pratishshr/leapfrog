<?php require_once(ROOT_PATH."system/dbutil/dbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/model/course.class.php");?>
<?php require_once(ROOT_PATH."system/repository/courserepository.class.php");?>
<?php
	$courserepository = new CourseRepository();
	if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action']="delete"){
		$courserepository->delete($_GET['id']);
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
		<th>COURSE NAME</th>
		<th>ADDED DATE</th>
		<th>STATUS</th>
		
	</tr>

<?php
	foreach($courserepository->get_all() as $student){
?>
	<tr>
		<td><?php echo $student->get_id();?></td>
		<td><?php echo $student->get_course_name();?></td>
		<td><?php echo $student->get_added_date();?></td>
		<td><?php echo $student->get_status();?></td>
		<td><a href="edit.php?id=<?php echo $student->get_id();?>" class="btn btn-primary btn-sm">Edit</a>
		    <a href="index.php?id=<?php echo $student->get_id();?>&action=delete" class="btn btn-danger btn-sm">Delete</a></td>

	</tr>
	

<?php		
	}
?>
</table>



