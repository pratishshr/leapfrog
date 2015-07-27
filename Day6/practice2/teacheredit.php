




<?php require_once("models/teacher.class.php"); ?>
<?php require_once("repository/teacherrepository.class.php"); ?>
<?php
	$teacher1 = new Teacher();
	$teacher2 = new Teacher();
	$teacher3 = new Teacher();
	$teacher4 = new Teacher();

	$teacherrepository = new TeacherRepository();
	
	$teacher1->initialize(1,"dixanta","shrestha","dixanta@gmail.com","php");
	$teacher2->initialize(2,"ram","shah","dixanta@gmail.com",".net");
	$teacher3->initialize(3,"shyam","malakar","dixanta@gmail.com","java");
	$teacher4->initialize(4,"hari","shrestha","dixanta@gmail.com","ruby");

	$teacherrepository->add_teacher($teacher1);
	$teacherrepository->add_teacher($teacher2);
	$teacherrepository->add_teacher($teacher3);
	$teacherrepository->add_teacher($teacher4);
	
	$std = $teacherrepository->get_by_id($_GET['id']);

	if(is_null($std)){
		header("Location:teacher.php");
		exit();
	}

?>
<?php include_once("header.php"); ?>
	
<form action="teachersave.php" method="post">
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name" value="<?php echo $std->get_first_name();?>">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" value="<?php echo $std->get_last_name();?>">
  </div>
  <div class="form-group">
    <label for="email">E-Mail</label>
    <input type="email" class="form-control" id="eMail" name="email" placeholder="Email" value="<?php echo $std->get_email();?>">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" id="id" name="id" placeholder="id"  value="<?php echo $std->get_id();?>">
  </div>
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>

<?php include_once("footer.php"); ?>
