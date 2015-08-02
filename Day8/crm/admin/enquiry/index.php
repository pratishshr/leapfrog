<?php include_once("../config.php");?>
<?php include_once(ROOT_PATH."system/models/enquiry.class.php");?>
<?php include_once(ROOT_PATH."system/repository/enquiry_repository.class.php");?>
<?php
	$enquiry_repository=new EnquiryRepository();

	if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action']=='delete'){
		$enquiry_repository->delete($_GET['id']);
		header("location:index.php");
	}

?>

<?php include_once("../header.php");?>

<?php if(isset($_GET['success']) && $_GET['success']=="true") {?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
</div>
<?php }?>

<div class="pull-right">
	<a href="add.php" class="btn btn-primary">Add Enquiry</a>
</div>



<div class="row">
<table class="table table-stripped table-hover">
<tr>
<th>Id</th>
<th>Company Name</th>
<th>contact Person</th>
<th>Email</th>
<th>Contact No</th>
<th>Enquiry Date</th>
<th>Subject</th>
<th>Action</th>
</tr>

<?php





foreach($enquiry_repository->get_all('id desc') as $enq){
?>
<tr>
	<td><?php echo $enq->get_id()?></td>
	<td><?php echo $enq->get_company_name()?></td>
	<td><?php echo $enq->get_first_name()?> <?php echo $enq->get_last_name()?></td>
	<td><?php echo $enq->get_email()?></td>
	<td><?php echo $enq->get_contact_no()?></td>
	<td><?php echo $enq->get_enquiry_date()?></td>
	<td><?php echo $enq->get_subject()?></td>
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


<select name="enq">
<?php
foreach($enquiry_repository->get_all('first_name desc') as $enq){
?>
<option value="<?php echo $enq->get_id()?>"><?php echo $enq->get_first_name()?> <?php echo $enq->get_last_name()?></td>
	<</option>
<?php
	}
?>	

</select>




<?php include_once("../footer.php");?>

