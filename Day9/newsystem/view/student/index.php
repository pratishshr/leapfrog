<div class="page-header">
	<h1> Students Table</h1>
</div>

<?php
if(isset($_GET['action']) && $_GET['action']=="success"){
	
?>

<div class="alert alert-success" role="alert">
    Successfull! 
</div>

<?php  
}elseif(isset($_GET['action']) && $_GET['action']=="delete"){
?>	
<div class="alert alert-danger" role="alert">
    Deleted! 
</div>

<?php
}
?>

<form action="index.php?page=student" method="post">
	<div class="form-group">
    <label for="sort">Order By:</label>
    <select name="sort">
    	<option value="id">ID</option>
    	<option value="first_name">Name</option>
    	<option value="course">Course</option>
    </select>
    <input type="submit" class="btn btn-default btn-sm" value="GO" name="order">
  </div>

</form>
<a href="index.php?page=student&m=add" class="pull-right btn btn-primary btn-sm"> Add Student</a>

<table class="table table-striped table-hover">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>CONTACT NO</th>
		<th>COURSE</th>
		<th>ACTION</th>
	</tr>

<?php 
	foreach($this->studentrepository->get_student_courses($order) as $student){

?>
	<tr>
	<td><?php echo $student->get_id();?></td>
	<td><?php echo $student->get_first_name();?> <?php echo $student->get_last_name();?></td>
	<td><?php echo $student->get_email();?></td>
	<td><?php echo $student->get_contact_no();?></td>
	<td><?php echo ($student->get_course()->get_course_name());?></td>
	<td><a href="index.php?page=student&m=edit&id=<?php echo $student->get_id();?>" class="btn btn-primary btn-sm">EDIT</a>
		<a href="index.php?page=student&m=delete&id=<?php echo $student->get_id();?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">DELETE</a></td>



<?php
	}
?>
	
</table>
