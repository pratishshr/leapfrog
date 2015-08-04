<?php 
	if(isset($_GET['action'])){
		if($_GET['action']=='success'){
?>
	<div class="alert alert-success" role="alert">SUCCESFULL!</div>
<?php
	}else{
?>
	<div class="alert alert-danger" role="alert">DELETED!</div>		
<?php		
	}
}		
?>


<div class="page-header">
	<h1>Products List</h1>
</div>



<a href= "index.php?page=admin&m=add" class="btn btn-primary pull-right">Add Product</a>




<table class="table table-hover table-striped">
	<tr>
		<th>ID</th>
		<th>PRODUCT NAME</th>
		<th>PRICE</th>
		<th>IMAGE</th>
		<th>DETAILS</th>
		<th>ACTION</th>
	</tr>
	
<?php
	foreach($this->productrepository->get_all() as $prod){
?>	
	
	<tr>
		<td><?php echo $prod->get_id();?></td>
		<td><?php echo $prod->get_product_name();?></td>
		<td>Rs. <?php echo $prod->get_price();?></td>
		<td><?php echo $prod->get_image();?></td>
		<td><?php echo $prod->get_details();?></td>
		<td><a href="index.php?page=admin&m=edit&id=<?php echo $prod->get_id();?>" class="btn btn-primary btn-sm">EDIT</a> 
			<a href="index.php?page=admin&m=delete&id=<?php echo $prod->get_id();?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">DELETE</a></td>
	</tr>

<?php		
	}
?>


</table>