<?php require_once("config.php");?>
<?php require_once(ROOT_PATH."system/dbutil/dbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/model/students.class.php");?>
<?php require_once(ROOT_PATH."system/repository/studentrepository.class.php");?>

<?php include_once("header.php");?>

<?php
	$id = $_GET['id'];
	$studentrepository = new StudentRepository();
	$student = $studentrepository->get_by_id($id);
?>
<div class="page-header">
	<h1>Edit Student Details </h1>
</div>
<form action="save.php" method="post">
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $student->get_first_name();?>">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="first_name" name="last_name" placeholder="First Name" value="<?php echo $student->get_last_name();?>">
  </div>
 
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="<?php echo $student->get_email();?>">
  </div>

  <div class="form-group">
    <label for="contact_no">Contact No</label>
    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No" value="<?php echo $student->get_contact_no();?>">
  </div>

   <div class="form-group">
    <label for="course">Course</label>
    <input type="text" class="form-control" id="course" name="course"placeholder="E-Course" value="<?php echo $student->get_course();?>">
  </div>
  
  	<input type="hidden" value="<?php echo $student->get_id();?>" name="id">

  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>