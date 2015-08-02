<div class="page-header">
  <h1> Add course </h1>
</div>


<form action="index.php?page=course&m=add" method="post">
  <div class="form-group">
    <label for="course_name">First Name</label>
    <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Coruse Name" value="">
  </div>
  

   <div class="form-group">
    <label for="status">Course</label>
    <label><input type="radio" class="form-control" id="status" name="status" 
     value="1" checked="checked"> Active</label>
     <label><input type="radio" class="form-control"  name="status" 
     value="0" > Inactive</label>    
  </div>
    <input type="hidden" value="" name="id">
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
  <a href = "index.php?page=course" class="btn btn-danger"> Cancel </a>
</form>