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

	$std =  $courserepository->get_by_id($_GET['id']);

	if(is_null($std)){
		header("Location:course.php");
	}
	
?>	

<?php include("header.php"); ?>

<div class="page-header">
  <h1>EDIT<small> Course list</small></h1>
</div>

<form action="save.php" method="post">
  <div class="form-group">
    <label for="coursename">Course Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name" value="<?php echo $std->get_course_name(); ?>">
  </div>
   <div class="form-group">
    <label for="email">Course Duration</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" value="<?php echo $std->get_course_duration(); ?>">
  </div>
 
  <div class="form-group">
    <label for="teacher">Teacher</label>
    <input type="ttext" class="form-control" id="exampleInputPassword1" placeholder="Email" value="<?php echo $std->get_teacher(); ?>">
  </div>
  

 
 
  <button type="save" class="btn btn-primary">Save</button>
  <a href="course.php" class="btn btn-danger">Cancel</a>
</form>