
<form class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-6">
      ID:	
      <input type="text" class="form-control" name="id" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
      Course Name:
      <input type="text" class="form-control" name="cname" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
    Duration:
    	<select class="form-control">
    		<option>1month</option>
    		<option>2months</option>
    		<option>3months</option>
    	</select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
        Amount:
        <input type="Number" class="form-control" name="amount" min="0" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
    	Status:
      	<select class="form-control">
      		<option>Ongoing</option>
      		<option>On Halt</option>
      		<option>Announced</option>
      		<option>Completed</option>
      	</select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-6">
        <input type="Submit" class="form-control btn-primary" name="submit" value="Save">
    </div>
  </div>
 </form>