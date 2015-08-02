<?php
	class CourseRepository{
		private $db = null;

		public function __construct(){
			$this->db = new DBConnection();
		}

		public function get_all(){
			$course_list = array();

			$sql = "SELECT * from course";

			$this->db->connect();

			$result = $this->db->fetch_query($sql);

			while($row = $result->fetch_assoc()){
				$course  = new Course();

				$course->set_id($row['id']);
				$course->set_course_name($row['course_name']);
				$course->set_duration($row['duration']);
				$course->set_status($row['status']);
				array_push($course_list,$course);

			}

				return $course_list;
				$this->db->close();
		}
	}

?>