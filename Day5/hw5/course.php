<?php
	require_once("models/course.class.php");
	require_once("repository/courserepository.class.php");

	$course1 = new Course();
	$course1->initiate(1,"PHP","2 months","Ram Shah");
	
	$course2 = new Course();
	$course2->initiate(2,".NET","2 months","Shyam Shrestha");
	
	$course3 = new Course();
	$course3->initiate(3,"JAVA","2 months","Hari Gopal");
	
	$course4 = new Course();
	$course4->initiate(4,"Python","2 months","Gopal Hari");
	
	

	

	$courserepository = new CourseRepository();
	$courserepository->add($course1); 
	$courserepository->add($course2);
	$courserepository->add($course3);
	$courserepository->add($course4);

?>		

<?php include("header.php"); ?>

	<div class="page-header">
	  <h1>Course List <small> Courses currently involved</small></h1>
	</div>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th><input type="checkbox" name="stdcheck"></th>
			<th>ID</th>
			<th>Course Name</th>
			<th>Course Duration </th>
			<th>Teacher</th>
			<th>Action</th>		
		</tr>
	
<?php
	foreach ($courserepository->get_all() as  $value) {
	
		

?>

	
	<tr>
		<td><input type="checkbox" name="stdcheck"></td>
		<td><?php echo $value->get_id(); ?></td>
		<td><?php echo $value->get_course_name();?>D</td>
		<td><?php echo $value->get_course_duration();?></td>
		<td><?php echo $value->get_teacher()?></td>
		<td><a href="courseedit.php?id=<?php echo $value->get_id();?>" class="btn btn-primary btn-sm">Edit</a> <a href="Coursedelete.php" class="btn btn-danger btn-sm">Delete</a></td>

		
	</tr>
<?php
	}
?>	


</table>



<?php include("footer.php"); ?>