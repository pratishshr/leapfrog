<div class="page-header">
	<h1> courses Table</h1>
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

<form action="index.php?page=course" method="post">
	<div class="form-group">
    <label for="sort">Order By:</label>
    <select name="sort">
    	<option value="id">ID</option>
    	<option value="course_name">Course Name</option>
    	<option value="status">Status</option>
    </select>
    <input type="submit" class="btn btn-default btn-sm" value="GO" name="order">
  </div>

</form>
<a href="index.php?page=course&m=add" class="pull-right btn btn-primary btn-sm"> Add course</a>

<table class="table table-striped table-hover">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>Added Date</th>
		
		<th>STATUS</th>
		<th>ACTION</th>
	</tr>

<?php 
	foreach($this->courserepository->get_all($order) as $course){

?>
	<tr>
	<td><?php echo $course->get_id();?></td>
	<td><?php echo $course->get_course_name();?></td>
	<td><?php echo $course->get_added_date();?></td>
	<td><?php echo $course->get_status();?></td>

	<td><a href="index.php?page=course&m=edit&id=<?php echo $course->get_id();?>" class="btn btn-primary btn-sm">EDIT</a>
		<a href="index.php?page=course&m=delete&id=<?php echo $course->get_id();?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">DELETE</a></td>



<?php
	}
?>
	
</table>
