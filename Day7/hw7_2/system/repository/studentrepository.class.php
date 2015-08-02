<?php
	class StudentRepository{

		private $db;

		public function __construct(){
			$this->db = new DBConnection();
		}

		public function get_all(){
			$student_list = array();

			//database connect
			$this->db->connect();


			//query
			$sql = "SELECT * FROM students";

			//execute and fetch data
			$result = $this->db->fetch_query($sql);

			

			while($row = $result->fetch_assoc()){
				//put in object
				$student = new Students();
				$student->set_id($row['id']);
				$student->set_first_name($row['first_name']);
				$student->set_last_name($row['last_name']);
				$student->set_email($row['email']);
				$student->set_contact_no($row['contact_no']);
				$student->set_course($row['course']);

				array_push($student_list,$student);
			}

			return $student_list;

			$this->db->close;
		}

	}
?>