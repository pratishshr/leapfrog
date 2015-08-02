<?php include_once(ROOT_PATH."system/models/category.class.php");?>
<?php include_once(ROOT_PATH."system/repository/category_repository.class.php");?>
<?php
	$category_repository=new CategoryRepository();

	if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action']=='delete'){
		$category_repository->delete($_GET['id']);
		header("location:index.php");
	}

?>


<?php if(isset($_GET['success']) && $_GET['success']=="true") {?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
</div>
<?php }?>

<div class="pull-right">
	<a href="index.php?page=aenquiry&m=add" class="btn btn-primary">Add Enquiry</a>
</div>



<div class="row">
<table class="table table-stripped table-hover">
<tr>
<th>Id</th>
<th>Category Name</th>
<th>Added Date</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php





foreach($category_repository->get_all('id desc') as $enq){
?>
<tr>
	<td><?php echo $enq->get_id()?></td>
	<td><?php echo $enq->get_category_name()?></td>
	<td><?php echo $enq->get_added_date()?></td>
	<td><?php echo $enq->get_status()?></td>
	<td>
	<a href="edit.php?id=<?php echo $enq->get_id()?>" class="btn btn-success">Edit</a>
	<a href="index.php?id=<?php echo $enq->get_id()?>&action=delete" class="btn btn-danger" onclick="return confirm('Are you sure to Delete?')">Delete</a>
	</td>
</tr>
<?php
	}
?>





</table>
</div>






