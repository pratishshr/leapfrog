<?php
	class StudentRepository{

		private $db;

		public function __construct(){
			$this->db = new DBConnection();
		}

		public function insert($students){
			//database connect
			$this->db->connect();

			//query
			$sql = "INSERT INTO students(first_name,last_name,email,contact_no,course) VALUES(?,?,?,?,?)";

			$stmt =	$this->db->initStatement($sql);
			
			$first_name = $students->get_first_name();
			$last_name = $students->get_last_name();
			$email= $students->get_email();
			$contact_no	 = $students->get_contact_no();
			$course = $students->get_course();
			
			$stmt->bind_param("sssss",$first_name,$last_name,$email,$contact_no,$course);

			$result = $stmt->execute();

			$this->db->close();
			return $result;




		}

		public function update($students){
			//database connect
			$this->db->connect();

			//query
			$sql = "UPDATE students(first_name,last_name,email,contact_no,course)  SET first_name=?,last_name=?,email=?,contact_no=?,course=? WHERE id=?" ;

			$stmt =	$this->db->initStatement($sql);
			$id = $students->get_id();
			$first_name = $students->get_first_name();
			$last_name = $students->get_last_name();
			$email= $students->get_email();
			$contact_no	 = $students->get_contact_no();
			$course = $students->get_course();
			
			$stmt->bind_param("sssssi",$first_name,$last_name,$email,$contact_no,$course,$id);

			$result = $stmt->execute();

			$this->db->close();
			return $result;




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

		public function get_by_id($id){

			$student = null;
			//database connect
			$this->db->connect();


			//query
			$sql = "SELECT * FROM students WHERE id=?";

			//execute 
			$stmt = $this->db->initStatement($sql);

			$stmt->bind_param("i",$id);
			$stmt->execute();

			$stmt->bind_result($id,$first_name,$last_name,$email,$contact_no,$course);

			
			
			while($stmt->fetch()){
				//put in object
				$student = new Students();
				$student->set_id($id);
				$student->get_id();
				$student->set_first_name($first_name);
				$student->set_last_name($last_name);
				$student->set_email($email);
				$student->set_contact_no($contact_no);
				$student->set_course($course);

				
			}

			$this->db->close();
			return $student;

		}

	}
?>