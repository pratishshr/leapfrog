<?php
	class StudentRepository{
		private $db = null;
		
		public function __construct(){
			$this->db = new DBConnection();
		}

		public function get_all($order=null){
			$student_list = array();

			//connect to database
			$this->db->connect();

			//query
			$sql = "SELECT * FROM students";
			if(isset($order)){
				$sql = $sql . " ORDER BY ". $order; 
			}

			//fetchquery
			$result = $this->db->fetchquery($sql);

			while($row = $result->fetch_assoc()){
				$student = new Students();

				$student->set_id($row['id']);
				$student->set_first_name($row['first_name']);
				$student->set_last_name($row['last_name']);
				$student->set_email($row['email']);
				$student->set_contact_no($row['contact_no']);
				$student->set_course($row['course_id']);

				array_push($student_list,$student);


			}

			$this->db->close();
			return $student_list;
		}

		public function get_student_courses($order=null){
			LoadHelper::model('course');
			$student_list = array();

			//connect to database
			$this->db->connect();

			//query
			$sql = "SELECT s.id,s.first_name,s.last_name,s.email,s.contact_no,c.id as course_id,c.course_name ";
			$sql .=" FROM students s JOIN courses c on s.course_id=c.id";
			if(isset($order)){
				$sql = $sql . " ORDER BY ". $order; 
			}

			//fetchquery
			$result = $this->db->fetchquery($sql);

			while($row = $result->fetch_assoc()){
				$student = new Students();

				$student->set_id($row['id']);
				$student->set_first_name($row['first_name']);
				$student->set_last_name($row['last_name']);
				$student->set_email($row['email']);
				$student->set_contact_no($row['contact_no']);

				$course=new Course();
				$course->set_id($row['course_id']);
				$course->set_course_name($row['course_name']);

				$student->set_course($course);

				array_push($student_list,$student);


			}

			$this->db->close();
			return $student_list;
		}		



		public function get_by_id($id){
			//connect
			$this->db->connect();

			//query
			$sql = "SELECT * FROM students WHERE id=?";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("i",$id);

			//execute
			$stmt->execute();

			//bind result
			$stmt->bind_result($id,$first_name,$last_name,$email,$contact_no,$course);

			while($row = $stmt->fetch()){
				$student = new Students();

				$student->set_id($id);
				$student->set_first_name($first_name);
				$student->set_last_name($last_name);
				$student->set_email($email);
				$student->set_contact_no($contact_no);
				$student->set_course($course);
			}

			$this->db->close();
			return $student;


		}



		public function insert($students){
			//connect to database
			$this->db->connect();

			//query
			$sql = "INSERT INTO students(first_name,last_name,email,contact_no,course_id) VALUES(?,?,?,?,?)";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("sssss",$first_name,$last_name,$email,$contact,$course);

			//set values;
			$first_name = $students->get_first_name();
			$last_name = $students->get_last_name();
			$email = $students->get_email();
			$contact = $students->get_contact_no();
			$course  = $students->get_course();

			//execute;
			$result = $stmt->execute();

			$this->db->close();
			return $result;
		}

		public function update($students){
				//connect to database
			$this->db->connect();

			//query
			$sql = "UPDATE students SET first_name=?,last_name=?,email=?,contact_no=?,course=? WHERE id=?";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("sssssi",$first_name,$last_name,$email,$contact,$course,$id);

			//set values;
			
			$first_name = $students->get_first_name();
			$last_name = $students->get_last_name();
			$email = $students->get_email();
			$contact = $students->get_contact_no();
			$course  = $students->get_course();
			$id = $students->get_id();

			//execute;
			$result = $stmt->execute();

			$this->db->close();
			return $result;

		}

		public function delete($id){
				//connect to database
			$this->db->connect();

			//query
			$sql = "DELETE FROM students WHERE id=?";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("i",$id);

			//execute;
			$stmt->execute();

			$this->db->close();
			

		}

	}
?>