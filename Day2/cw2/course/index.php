<?php 
include_once('../header.php');
?>

 <div class="pull-right">
 	<a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-course-dialog"><span class="glyphicon glyphicon-plus"></span></a>
 </div>

 
 <div>
 <select name="option">
 <option value="">Select</option>
 <option value="delete">Delete</option>
 <option value="active">Active</option>
 <option value="inactive">Inactive</option>
 </select>
 <button type="submit" class="btn btn-default btn-xs">Go</button>
 </div>

	<table class="table table-bordered table-striped table-hover">
		<tr>
		<th><input type="checkbox" id="select-all"/></th>
		<th>Id</th>
		<th>Name</th>
		<th>Duration</th>
		<th>Amount</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
		<tr>
		<td><input type="checkbox" name="checkbox"/>
		<td>1</td>
		<td>PHP</td>
		<td>2 Month</td>
		<td>15000</td>
		<td>Active</td>
		<td><a href="edit.php" class="btn btn-success btn-sm" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a> 
		<a href="delete.php" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><span class="glyphicon glyphicon-trash"></span></a></td>
		
		</tr>
		<tr>
		

	</table>

	<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


<div class="modal fade" id="add-course-dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
	
</body>
</html>