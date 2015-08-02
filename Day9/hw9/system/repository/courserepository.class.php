<?php
	class CourseRepository{
		private $db = null;
		
		public function __construct(){
			$this->db = new DBConnection();
		}

		public function get_all(){
			$student_list = array();

			//connect to database
			$this->db->connect();

			//query
			$sql = "SELECT * FROM course";

			//fetchquery
			$result = $this->db->fetchquery($sql);

			while($row = $result->fetch_assoc()){
				$student = new Course();

				$student->set_id($row['id']);
				$student->set_course_name($row['course_name']);
				$student->set_added_date($row['added_date']);
				$student->set_status($row['status']);
				
				array_push($student_list,$student);


			}

			$this->db->close();
			return $student_list;
		}

		public function get_by_id($id){
			//connect
			$this->db->connect();

			//query
			$sql = "SELECT * FROM courses WHERE id=?";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("i",$id);

			//execute
			$stmt->execute();

			//bind result
			$stmt->bind_result($id,$course_name,$added_date,$status);

			while($row = $stmt->fetch()){
				$student = new Students();

				$student->set_id($id);
				$student->set_course_name($course_name);
				$student->set_added_date($added_date);
				$student->set_status($status);
				
			}

			$this->db->close();
			return $student;


		}



		public function insert($students){
			//connect to database
			$this->db->connect();

			//query
			$sql = "INSERT INTO course(course_name,status) VALUES(?,?)";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("sa",$course_name,$status);

			//set values;
			$course_name = $students->get_course_name();
			$status = $students->get_status();
		

			//execute;
			$result = $stmt->execute();

			$this->db->close();
			return $result;
		}

		public function update($students){
				//connect to database
			$this->db->connect();

			//query
			$sql = "UPDATE students SET course_name=?,status=? WHERE id=?";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("ssi",$course_name,$status,$id);

			//set values;
			
			$course_name = $students->get_course_name();
			$status = $students->get_status();
			

			//execute;
			$result = $stmt->execute();

			$this->db->close();
			return $result;

		}

		public function delete($id){
				//connect to database
			$this->db->connect();

			//query
			$sql = "DELETE FROM course WHERE id=?";

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