
<a href="<?php echo site_url('admin/user/add')?>" class="pull-right btn btn-primary">Add</a>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Created Date</th>
			<th>Login Date</th>
			<th>Status</th>
			<th>Group ID</th>
			<th>Action</th>
		</tr>

<?php 
	foreach($users->result() as $user){
?>

	<tr>
		<td><?php echo $user->id;?></td>
		<td><?php echo $user->email;?></td>
		<td><?php echo $user->created_date;?></td>
		<td><?php echo $user->login_date;?></td>
		<td><?php echo $user->status;?></td>
		<td><?php echo $user->group_id;?></td>
		<td><a href="<?php echo site_url("admin/user/edit/$user->id");?>" class="btn btn-primary btn-sm"> EDIT </a> <a href="<?php echo site_url("admin/user/delete/$user->id");?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">DELETE </a></td>
	</tr>
<?php		
	}
?>		
	</table>