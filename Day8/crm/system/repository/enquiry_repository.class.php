<?php

class EnquiryRepository{



	private $db=null;

	public function __construct(){
		$this->db=new DBConnection();
	}


    public function insert($e){



       //$sql="INSERT INTO tbl_enquiries(company_name,first_name,last_name,email,contact_no,subject,message,enquiry_date)";
       //$sql += " VALUES(?,?,?,?,?,?,?,?)";

        $sql="insert into tbl_enquiries(company_name,first_name,last_name,email,contact_no,subject,message,enquiry_date) values(?,?,?,?,?,?,?,?)";    

       $this->db->connect();

       $stmt = $this->db->initStatement($sql);

       $company_name=$e->get_company_name();
       $first_name=$e->get_first_name();
       $last_name=$e->get_last_name();

       $email=$e->get_email();
       $contact_no=$e->get_contact_no();
       $subject=$e->get_subject();
       $message= $e->get_message();
       $enquiry_date=$e->get_enquiry_date();

        $stmt->bind_param("ssssssss",$company_name,$first_name,$last_name,$email,$contact_no,$subject,$message,$enquiry_date);
        $result=$stmt->execute();

        $this->db->close();
        return $result;

       



    }


    public function delete($id){



       //$sql="INSERT INTO tbl_enquiries(company_name,first_name,last_name,email,contact_no,subject,message,enquiry_date)";
       //$sql += " VALUES(?,?,?,?,?,?,?,?)";

        $sql="delete from tbl_enquiries where id=?";    

       $this->db->connect();

       $stmt = $this->db->initStatement($sql);

      

        $stmt->bind_param("i",$id);
        $result=$stmt->execute();

        $this->db->close();
        return $result;

       



    }    


  public function update($e){



       //$sql="INSERT INTO tbl_enquiries(company_name,first_name,last_name,email,contact_no,subject,message,enquiry_date)";
       //$sql += " VALUES(?,?,?,?,?,?,?,?)";

        $sql="Update tbl_enquiries set company_name=?,first_name=?,last_name=?,email=?,contact_no=?,subject=?,message=? WHERE id=?";    

       $this->db->connect();



       $stmt = $this->db->initStatement($sql);


       $id=$e->get_id();

       $company_name=$e->get_company_name();
       $first_name=$e->get_first_name();
       $last_name=$e->get_last_name();

       $email=$e->get_email();
       $contact_no=$e->get_contact_no();
       $subject=$e->get_subject();
       $message= $e->get_message();


        $stmt->bind_param("sssssssi",$company_name,$first_name,$last_name,$email,$contact_no,$subject,$message,$id);
        $result=$stmt->execute();

        $this->db->close();
        return $result;

       



    }


    public function get_by_id($id){

      $enquiry=null;

      $this->db->connect();


    $sql = "SELECT * from tbl_enquiries WHERE id=?";

    $stmt=$this->db->initStatement($sql);
    $stmt->bind_param("i",$id);

    $stmt->execute();

    $stmt->bind_result($id,$cname,$fname,$lname,$email,$contact_no,$subject,$message,$enquiry_date,$is_read);


   

    while($stmt->fetch()) {

          $enquiry=new Enquiry();

          $enquiry->set_id($id);
          $enquiry->set_company_name($cname);
          $enquiry->set_first_name($fname);
          $enquiry->set_last_name($lname);
          $enquiry->set_email($email);
          $enquiry->set_contact_no($contact_no);
          $enquiry->set_enquiry_date($enquiry_date);
          $enquiry->set_subject($subject);
          $enquiry->set_message($message);
          $enquiry->set_is_read($is_read);

          



      }

      $this->db->close();

      return $enquiry;

    }
	public function get_all($order_by=null){
		
		$enquiry_list=array();

		$this->db->connect();


		$sql = "SELECT * from tbl_enquiries";

    if(!is_null($order_by)){
      $sql= $sql . " ORDER BY " . $order_by;
    }

   

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
