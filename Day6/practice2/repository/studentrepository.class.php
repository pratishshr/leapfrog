<?php
	class StudentRepository{
		private $student_list = array();

		public function __construct(){

		}

		public function add_student($std){
			array_push($this->student_list,$std);
		}

		public function delete_by_id($id){
			$status = false;	
			foreach($this->student_list as $key => $value){
				if($value->get_id() == $id){
					unset($student_list[$key]);
					$status = true;
				}
			}
			return $status;

		}
		public function get_all(){
			return $this->student_list;
		}

		public function get_by_id($id){
			$student = null;
			foreach($this->student_list as $std){
				if($std->get_id() == $id){
					$student = $std;
					break;
				}
			}
			return $student;
		}
	}	



?>