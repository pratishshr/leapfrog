<?php include_once("config.php");?>
<?php include_once(ROOT_PATH."course/header.php");?>
<?php include_once(ROOT_PATH."system/models/course.class.php");?>
<?php include_once(ROOT_PATH."system/dbutil/againpractice_dbconnection.class.php");?>
<?php include_once(ROOT_PATH."system/repository/courserepository.class.php");?>

<div class="page-header">
  <h1>Course table</small></h1>
</div>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>DURATION</th>
			<th>STATUS</th>
			<th>COURSE</th>
		</tr>

<?php 
	$courserepository  = new CourseRepository();

	foreach($courserepository->get_all() as $course){

?>

	<tr>
		<td><?php echo $course->get_id();?></td>
		<td><?php echo $course->get_course_name();?></td>
		<td><?php echo $course->get_duration();?></td>
		<td><?php echo ($course->get_status()==1)?"ACTIVE":"INACTIVE";?></td>
		<td><a href="#" class="btn btn-primary btn-sm">EDIT</a> <a href="#" class="btn btn-danger btn-sm">DELETE</a></td>

	</tr>


<?php		
	}
?>	



<?php include_once(ROOT_PATH."course/footer.php");?>