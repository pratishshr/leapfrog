<div class="page-header">
  <h1> Add Student </h1>
</div>


<form action="index.php?page=student&m=add" method="post">
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="first_name" name="last_name" placeholder="First Name" value="">
  </div>
 
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="">
  </div>

  <div class="form-group">
    <label for="contact_no">Contact No</label>
    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No" value="">
  </div>

   <div class="form-group">
    <label for="course">Course</label>
    <select  class="form-control" id="course-id" name="course_id">
    <option value=""></option>
    <?php 
        foreach($course_repository->get_all() as $c){
      ?>
      <option value="<?php echo $c->get_id()?>"><?php echo $c->get_course_name()?></option>
    <?php   
        }
    ?>
    </select>
    
  </div>
    <input type="hidden" value="" name="id">
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
  <a href = "index.php?page=student" class="btn btn-danger"> Cancel </a>
</form>