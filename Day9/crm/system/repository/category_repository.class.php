<?php

class CategoryRepository{



	private $db=null;

	public function __construct(){
		$this->db=new DBConnection();
	}


    public function insert($e){



       //$sql="INSERT INTO tbl_enquiries(company_name,first_name,last_name,email,contact_no,subject,message,enquiry_date)";
       //$sql += " VALUES(?,?,?,?,?,?,?,?)";

        $sql="insert into tbl_categories(category_name,status) values(?,?)";    

       $this->db->connect();

       $stmt = $this->db->initStatement($sql);

       $category_name=$e->get_category_name();
       $status= $e->get_status();
      

        $stmt->bind_param("si",$category_name,$status);
        $result=$stmt->execute();

        $this->db->close();
        return $result;

       



    }


    public function delete($id){



       //$sql="INSERT INTO tbl_enquiries(company_name,first_name,last_name,email,contact_no,subject,message,enquiry_date)";
       //$sql += " VALUES(?,?,?,?,?,?,?,?)";

        $sql="delete from tbl_categories where id=?";    

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

        $sql="Update tbl_categories set category_name=?,status=? WHERE id=?";    

       $this->db->connect();



       $stmt = $this->db->initStatement($sql);


       $id=$e->get_id();

       $category_name=$e->get_category_name();
       
       $status= $e->get_status();


        $stmt->bind_param("si",$category_name,$status,$id);
        $result=$stmt->execute();

        $this->db->close();
        return $result;

       



    }


    public function get_by_id($id){

      $enquiry=null;

      $this->db->connect();


    $sql = "SELECT * from tbl_categories WHERE id=?";

    $stmt=$this->db->initStatement($sql);
    $stmt->bind_param("i",$id);

    $stmt->execute();

    $stmt->bind_result($id,$cname,$fname,$lname,$email,$contact_no,$subject,$message,$enquiry_date,$is_read);


   

    while($stmt->fetch()) {

          $enquiry=new Enquiry();

          $enquiry->set_id($row['id']);
          $enquiry->set_category_name($row['category_name']);
          $enquiry->set_added_date($row['added_date']);
          $enquiry->set_status($row['status']);

          



      }

      $this->db->close();

      return $enquiry;

    }
	public function get_all($order_by=null){
		
		$enquiry_list=array();

		$this->db->connect();


		$sql = "SELECT * from tbl_categories";

    if(!is_null($order_by)){
      $sql= $sql . " ORDER BY " . $order_by;
    }

   

		$result = $this->db->fetchQuery($sql);

		while($row = $result->fetch_assoc()) {

    	    $enquiry=new Enquiry();

    	    $enquiry->set_id($row['id']);
    	    $enquiry->set_category_name($row['category_name']);
    	    $enquiry->set_added_date($row['added_date']);
    	    $enquiry->set_status($row['status']);


    	    $enquiry_list[]=$enquiry;



    	}

    	$this->db->close();

    	return $enquiry_list;

	}

}
