<?php require_once("models/student.class.php"); ?>
<?php require_once("repository/studentrepository.class.php"); ?>
<?php
	$student1 = new Student();
	$student2 = new Student();
	$student3 = new Student();
	$student4 = new Student();

	$studentrepository = new StudentRepository();

	$student1->initiate(1,"Pratish","Shrestha","vanroshr@gmail.com");
	$student2->initiate(2,"Sujan","Shrestha","sujanshr@gmail.com");
	$student3->initiate(3,"Sujan","Malakar","sujanbm@gmail.com");
	$student4->initiate(4,"Ram","Shah","ram@live.com");

	$studentrepository->add_student($student1);
	$studentrepository->add_student($student2);
	$studentrepository->add_student($student3);
	$studentrepository->add_student($student4);

	$std = $studentrepository->get_by_id($_GET['id']);

	if(is_null($std)){
		header("Location:student.php");
		exit();
	}

?>
<?php include_once("header.php"); ?>
	
<form action="studentsave.php" method="post">
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
