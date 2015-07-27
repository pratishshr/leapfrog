<?php
	require_once("models/student.class.php");
	require_once("repository/studentrepository.class.php");

	$student1 = new Student();
	$student1->initiate(1,"Pratish","Shrestha","vanroshr@gmail.com");

	$student2 = new Student();
	$student2->initiate(2,"Sujan","Malakar","malakar@live.com");

	$student3 = new Student();
	$student3->initiate(3,"Sujan","Shrestha","sujan@live.com");
	
	$student4 = new Student();
	$student4->initiate(4,"Ram","Shah","ram@live.com");

	$studentrepository = new StudentRepository();
	$studentrepository->add($student1); 
	$studentrepository->add($student2);
	$studentrepository->add($student3);
	$studentrepository->add($student4);

	$std = $studentrepository->get_by_id($_GET['id']);

	if(is_null($std)){
		header("Location:student.php");
	}
	
?>	

<?php include("header.php"); ?>

<div class="page-header">
  <h1>EDIT<small> Students list</small></h1>
</div>

<form action="save.php" method="post">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name" value="<?php echo $std->get_first_name(); ?>">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name" value="<?php echo $std->get_last_name(); ?>">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" value="<?php echo $std->get_email(); ?>">
  </div>
 
 
  <button type="save" class="btn btn-primary">Save</button>
  <a href="student.php" class="btn btn-danger">Cancel</a>
</form>