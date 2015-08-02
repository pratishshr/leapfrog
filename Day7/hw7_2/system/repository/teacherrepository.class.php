<?php
	class TeacherRepository{
		private $db = null;

		 public function __construct(){
		 	$this->db = new DBConnection;
		 }

		 public function get_all(){
		 		$teacher_list = array();

		 		$this->db->connect();

		 		$sql = "SELECT * FROM teachers";

		 		$result = $this->db->fetch_query($sql);

		 		while($row = $result->fetch_assoc()){
		 			$teacher = new Teacher();
		 			$teacher->set_id($row['id']);
		 			$teacher->set_first_name($row['first_name']);
		 			$teacher->set_last_name($row['last_name']);
		 			$teacher->set_email($row['email']);
		 			$teacher->set_contact_no($row['contact_no']);
		 			$teacher->set_faculty($row['faculty']);
		 			
		 			array_push($teacher_list,$teacher);

		 		}

		 		return $teacher_list;
		 }	
	}
?>