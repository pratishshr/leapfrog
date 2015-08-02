<?php include_once("config.php");?>
<?php include_once(ROOT_PATH."students/header.php");?>
<?php require_once(ROOT_PATH."system/models/students.class.php");?>
<?php require_once(ROOT_PATH."system/dbutil/dbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/repository/studentrepository.class.php");?>	
<div class="page-header">
  <h1>Students table</small></h1>
</div>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>CONTACT NO</th>
			<th>COURSE</th>
			<th>ACTION</th>
		</tr>
	

<?php
		$student = new StudentRepository();

		foreach($student->get_all() as $std){
?>			

		<tr>
			<td><?php echo $std->get_id();?></td>
			<td><?php echo $std->get_first_name();?> <?php echo $std->get_last_name();?></td>
			<td><?php echo $std->get_email();?></td>
			<td><?php echo $std->get_contact_no();?></td>
			<td><?php echo $std->get_course();?></td>
			<td><a href="#" class="btn btn-primary btn-sm">Edit</a> <a href="#" class="btn btn-danger btn-sm">Delete</a> 

		</tr>

	
<?php
	} //end of foreach
?>
</table>

<?php include_once(ROOT_PATH."students/footer.php");?>

