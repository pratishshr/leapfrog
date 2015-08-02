<div class="page-header">
  <h1> Edit Student </h1>
</div>

<form action="index.php?page=student&m=edit" method="post">
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $e->get_first_name();?>">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="first_name" name="last_name" placeholder="First Name" value="<?php echo $e->get_last_name();?>">
  </div>
 
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="<?php echo $e->get_email();?>">
  </div>

  <div class="form-group">
    <label for="contact_no">Contact No</label>
    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No" value="<?php echo $e->get_contact_no();?>">
  </div>

   <div class="form-group">
    <label for="course">Course</label>
    <input type="text" class="form-control" id="course" name="course" placeholder="Course" value="<?php echo $e->get_course();?>">
  </div>
    <input type="hidden" value="<?php echo $e->get_id();?>" name="id">
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
  <a href = "index.php?page=student" class="btn btn-danger"> Cancel </a>
</form>