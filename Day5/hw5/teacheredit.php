<?php
	require_once("models/teacher.class.php");
 	require_once("repository/teacherrepository.class.php");

 	$teacher1 = new Teacher();
 	$teacher1->initiate(1,"Dixanta","Shrestha","dixanta@gmail.com","PHP");

 	$teacher2 = new Teacher();
 	$teacher2->initiate(2,"Ram","Shrestha","ram@gmail.com",".NET");

 	$teacher3 = new Teacher();
 	$teacher3->initiate(3,"Shyam","Shrestha","shyam@gmail.com","JAVA");

	$teacher4 = new Teacher();
 	$teacher4->initiate(4,"Hari","Shrestha","hari@gmail.com","Python");

 	$teacherrepository = new TeacherRepository();
 	$teacherrepository->add($teacher1);
 	$teacherrepository->add($teacher2);
 	$teacherrepository->add($teacher3);
 	$teacherrepository->add($teacher4);
	$teach = $teacherrepository->get_by_id($_GET['id']);

	if(is_null($teach)){
		header("Location:teacher.php");
	}
	
?>	

<?php include("header.php"); ?>

<div class="page-header">
  <h1>EDIT<small> Teachers list</small></h1>
</div>

<form action="save.php" method="post">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name" value="<?php echo $teach->get_first_name(); ?>">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name" value="<?php echo $teach->get_last_name(); ?>">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" value="<?php echo $teach->get_email(); ?>">
  </div>
 
 
  <button type="save" class="btn btn-primary">Save</button>
  <a href="teacher.php" class="btn btn-danger">Cancel</a>
</form>