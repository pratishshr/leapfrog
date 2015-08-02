<?php include_once("config.php");?>

<?php include_once(ROOT_PATH."system/models/enquiry.class.php");?>
<?php include_once(ROOT_PATH."system/repository/enquiryrepository.class.php");?>
<?php include_once("header.php");?>

<table class="table table-hover table-striped table-bordered">
	<tr>
		<th>ID</th>
		<th>COMPANY NAME</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>CONTACT NO</th>
		<th>SUBJECT</th>
		<th>MESSAGE</th>
		<th>ENQUIRY DATE</th>
		<th>ACTION</th>
	</tr>
<?php
	$enquiry_repository = new EnquiryRepository();

	foreach($enquiry_repository->get_all() as $enq){
?>

	<tr>
		<td><?php echo $enq->get_id();?></td>
		<td><?php echo $enq->get_company_name();?></td>
		<td><?php echo $enq->get_first_name();?> <?php echo $enq->get_last_name();?></td>
		<td><?php echo $enq->get_email();?></td>
		<td><?php echo $enq->get_contact_no();?></td>
		<td><?php echo $enq->get_subject();?></td>
		<td><?php echo $enq->get_message();?></td>
		<td><?php echo $enq->get_enquiry_date();?></td>
		<td><a href="edit.php" class="btn btn-primary btn-sm">EDIT</a> <a href="delete.php" class="btn btn-danger btn-sm">DELETE</a></td>

	</tr>
	
	

<?php
	} //end of foreach

?>


</table>


<?php include_once("footer.php");?>