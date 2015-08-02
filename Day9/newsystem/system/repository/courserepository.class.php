<?php
	class CourseRepository{
		private $db = null;
		
		public function __construct(){
			$this->db = new DBConnection();
		}

		public function get_all($order=null,$where=NULL){
			$course_list = array();

			//connect to database
			$this->db->connect();

			//query
			$sql = "SELECT * FROM courses";

			if(!is_null($where)){
				$sql = $sql . " WHERE " . $where;
			}

			if(!is_null($order)){
				$sql = $sql . " ORDER BY ". $order; 
			}



			//fetchquery
			$result = $this->db->fetchquery($sql);

			while($row = $result->fetch_assoc()){
				$course = new Course();

				$course->set_id($row['id']);
				$course->set_course_name($row['course_name']);
				$course->set_added_date($row['added_date']);
				$course->set_status($row['status']);
				


				array_push($course_list,$course);


			}

			$this->db->close();
			return $course_list;
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
				$course = new courses();

				$course->set_id($id);
				$course->set_course_name($course_name);
				$course->set_added_date($added_date);
				$course->set_status($status);
			}

			$this->db->close();
			return $course;


		}



		public function insert($courses){
			//connect to database
			$this->db->connect();

			//query
			$sql = "INSERT INTO courses(course_name,status) VALUES(?,?)";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			

			//set values;
			$course_name = $courses->get_course_name();
			$status = $courses->get_status();


			$stmt->bind_param("si",$course_name,$status);

			//execute;
			$result = $stmt->execute();

			$this->db->close();
			return $result;
		}

		public function update($courses){
				//connect to database
			$this->db->connect();

			//query
			$sql = "UPDATE courses SET first_name=?,last_name=?,email=?,contact_no=?,course=? WHERE id=?";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("sssssi",$first_name,$last_name,$email,$contact,$course,$id);

			//set values;
			
			$first_name = $courses->get_first_name();
			$last_name = $courses->get_last_name();
			$email = $courses->get_email();
			$contact = $courses->get_contact_no();
			$course  = $courses->get_course();
			$id = $courses->get_id();

			//execute;
			$result = $stmt->execute();

			$this->db->close();
			return $result;

		}

		public function delete($id){
				//connect to database
			$this->db->connect();

			//query
			$sql = "DELETE FROM courses WHERE id=?";

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