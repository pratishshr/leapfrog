<?php
	class CourseRepository{
		private $course_list = array();

		public function add($course){
			array_push($this->course_list,$course);
		}

		public function get_all(){
			return $this->course_list;
		}

		public function delete_by_id($id){
			$status = false;
			foreach($this->course_list as $key=>$course){
				if($course->get_id() == $id){
					unset($course_list[$key]);
					$status = true;
					break;
				}
			}
			return $status;
		}

		public function get_by_id($id){
			$course = null;
			foreach($this->course_list as $value){
				if($value->get_id() == $id){
					$course = $value;
					break;
				}
			}
			return $course;
		}

	}
?>