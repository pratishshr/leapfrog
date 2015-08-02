<?php include_once("../config.php");?>
<?php include_once(ROOT_PATH."system/models/enquiry.class.php");?>
<?php include_once(ROOT_PATH."system/repository/enquiry_repository.class.php");?>
<?php

if(!isset($_POST['submit']))
{
	header("location:index.php");
}
$enquiry=new Enquiry();

$enquiry->set_company_name($_POST['company_name']);
$enquiry->set_first_name($_POST['first_name']);
$enquiry->set_last_name($_POST['last_name']);
$enquiry->set_email($_POST['email']);
$enquiry->set_contact_no($_POST['contact_no']);
$enquiry->set_subject($_POST['subject']);
$enquiry->set_message($_POST['message']);

$enquiry->set_enquiry_date(date('Y-m-d H:i:s'));

$enquiry_repository=new EnquiryRepository();

$result=0;

if(isset($_POST['id']) && $_POST['id']==''){

	$result=$enquiry_repository->insert($enquiry);

}
else{


	$enquiry->set_id($_POST['id']);
	$result=$enquiry_repository->update($enquiry);
}

if($result >0){
	header("location:index.php?success=true");
}
else{
	header("location:add.php?error=true");

}

exit();