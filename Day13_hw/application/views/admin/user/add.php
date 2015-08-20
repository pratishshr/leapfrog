<?php echo form_open(site_url('admin/user/add'))?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <div class="form-group">
 <label for="status">Status</label>
 <div class="radio">
  <label>
    <input type="radio" name="status" id="optionsRadios1" value="1" checked>
   Active
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="status" id="optionsRadios2" value="0">
    Inactive
  </label>
</div>
</div>


  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
 <?php echo form_close();?>