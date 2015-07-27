<?php include_once("../config.php");?>
<?php include_once(ROOT_PATH."system/models/enquiry.class.php");?>
<?php include_once(ROOT_PATH."system/repository/enquiry_repository.class.php");?>

<?php include_once("../header.php");?>

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

$enquiry_repository=new EnquiryRepository();



foreach($enquiry_repository->get_all() as $enq){
?>
<tr>
	<td><?php echo $enq->get_id()?></td>
	<td><?php echo $enq->get_company_name()?></td>
	<td><?php echo $enq->get_first_name()?> <?php echo $enq->get_last_name()?></td>
	<td><?php echo $enq->get_email()?></td>
	<td><?php echo $enq->get_contact_no()?></td>
	<td><?php echo $enq->get_enquiry_date()?></td>
	<td><?php echo $enq->get_subject()?></td>
	<td><a href="edit.php?id=<?php echo $enq->get_id()?>" class="btn btn-success">Edit</a></td>
</tr>
<?php
	}
?>





</table>

<select name="enq">
<?php
foreach($enquiry_repository->get_all() as $enq){
?>
<option value="<?php echo $enq->get_id()?>"><?php echo $enq->get_first_name()?> <?php echo $enq->get_last_name()?></td>
	<</option>
<?php
	}
?>	

</select>




<?php include_once("../footer.php");?>

