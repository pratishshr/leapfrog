<?php
	require_once('models/student.class.php');
	require_once('repository/studentrepository.class.php');

	$repository=new StudentRepository();

	$student=new Student();
	$student->initialize(1,"sujan","malakar","sujan@gmail.com");

	$repository->add($student);

	$student1=new Student();
	$student1->initialize(2,"Pratish","Shrestha","pratish@gmail.com");

	$repository->add($student1);

	$student2=new Student();
	$student2->initialize(3,"Pratasdfadish","asdf","pratish@gmail.com");

	$repository->add($student2);


	$std=$repository->get_by_id($_GET['id']);
	
	if(is_null($std)){
		header("location:student.php");
		exit;
	}

	

?>
<?php include_once("header.php") ?>


<form action="savestudent.php" method="post">
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required="required" 
    value="<?php echo $std->get_first_name()?>"/>
  </div>
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required="required" value="<?php echo $std->get_last_name()?>"/>
  </div>
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required"  value="<?php echo $std->get_email()?>"/>
  </div>

  <input type="hidden" name="student_id" value="<?php echo $std->get_id()?>"/>
  <button type="submit" class="btn btn-default" name="btnsubmit">Save</button>
  <a href="student.php" class="btn btn-danger">Cancel</a>
</form>

<?php include_once("footer.php") ?>
