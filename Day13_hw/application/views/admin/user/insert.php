

<?php foreach($user->result() as $user){
  ?>
<?php echo form_open(site_url('admin/user/edit/'.$user->id));
 
?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $user->email;?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $user->password;?>"> 
    <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" value="<?php echo $user->id;?>">
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
<?php
}
?>

  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
 <?php echo form_close();?>