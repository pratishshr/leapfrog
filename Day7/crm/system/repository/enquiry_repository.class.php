<?php

class EnquiryRepository{



	private $db=null;

	public function __construct(){
		$this->db=new DBConnection();
	}


	public function get_all(){
		
		$enquiry_list=array();

		$this->db->connect();


		$sql = "SELECT * from tbl_enquiries";

		$result = $this->db->fetchQuery($sql);

		while($row = $result->fetch_assoc()) {

    	    $enquiry=new Enquiry();

    	    $enquiry->set_id($row['id']);
    	    $enquiry->set_company_name($row['company_name']);
    	    $enquiry->set_first_name($row['first_name']);
    	    $enquiry->set_last_name($row['last_name']);
    	    $enquiry->set_email($row['email']);
    	    $enquiry->set_contact_no($row['contact_no']);
    	    $enquiry->set_enquiry_date($row['enquiry_date']);
    	    $enquiry->set_subject($row['subject']);
    	    $enquiry->set_message($row['message']);
    	    $enquiry->set_is_read($row['is_read']);

    	    $enquiry_list[]=$enquiry;



    	}

    	$this->db->close();

    	return $enquiry_list;

	}

}
