<?php include_once("config.php");?>
<?php include_once(ROOT_PATH."students/header.php");?>
<?php require_once(ROOT_PATH."system/models/Teachers.class.php");?>
<?php require_once(ROOT_PATH."system/dbutil/newdbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/repository/teacherrepository.class.php");?>	
<div class="page-header">
  <h1>Teachers table</small></h1>
</div>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>CONTACT NO</th>
			<th>FACULTY</th>
			<th>ACTION</th>
		</tr>

<?php
	$teacherrepository = new TeacherRepository();
	 foreach($teacherrepository->get_all() as $teach){
?>
	<tr>
		<td><?php echo $teach->get_id();?></td>
		<td><?php echo $teach->get_first_name();?> <?php echo $teach->get_last_name();?></td>
		<td><?php echo $teach->get_email();?></td>
		<td><?php echo $teach->get_contact_no();?></td>
		<td><?php echo $teach->get_faculty();?></td>
		<td><a href="#" class="btn btn-sm btn-primary">Edit</a> <a href="#" class="btn btn-danger btn-sm">Delete</a>
	</tr>




<?php	 	
	 }		
?>	

