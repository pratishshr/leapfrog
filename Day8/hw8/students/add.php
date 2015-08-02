<?php include_once("config.php");?>
<?php include_once(ROOT_PATH."students/header.php");?>
<?php require_once(ROOT_PATH."system/models/students.class.php");?>
<?php require_once(ROOT_PATH."system/dbutil/dbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/repository/studentrepository.class.php");?>	

<div class="page-header">
  <h1>Add Student</small></h1>
</div>

<form action="save.php" method="post">
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="last_name">Contact No</label>
    <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="Contact No">
  </div>
  <div class="form-group">
    <label for="course">Course</label>
    <input type="text" name="course" class="form-control" id="course" placeholder="Course">
  </div>
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>



<?php include_once(ROOT_PATH."students/footer.php");?>

