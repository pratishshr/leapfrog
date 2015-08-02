<?php require_once("config.php");?>
<?php require_once(ROOT_PATH."system/model/teachers.class.php");?>
<?php require_once(ROOT_PATH."system/repository/teacherrepository.class.php");?>
<?php require_once(ROOT_PATH."system/dbutil/dbconnection2.class.php");?>

<?php include_once(ROOT_PATH."teachers/header.php");?>

<?php
	$teacherrepository = new TeacherRepository();
	$id = $_GET['id'];
	$teacher = $teacherrepository->get_by_id($id);

?>

<div class="page-header">
	<h1> Edit Teacher </h1>
</div>



<form action="save.php" method="post">
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $teacher->get_first_name();?>">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="first_name" name="last_name" placeholder="First Name" value="<?php echo $teacher->get_last_name();?>">
  </div>
 
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="<?php echo $teacher->get_email();?>">
  </div>

  <div class="form-group">
    <label for="contact_no">Contact No</label>
    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No" value="<?php echo $teacher->get_contact_no();?>">
  </div>

   <div class="form-group">
    <label for="faculty">Faculty</label>
    <input type="text" class="form-control" id="faculty" name="faculty" placeholder="Faculty" value="<?php echo $teacher->get_faculty();?>">
  </div>
    <input type="hidden" value="<?php echo $teacher->get_id();?>" name="id">
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>