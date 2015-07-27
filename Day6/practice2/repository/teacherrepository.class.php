<?php
	class TeacherRepository{
		private $teacher_list = array();

		public function __construct(){

		}

		public function add_teacher($teacher){
			array_push( $this->teacher_list, $teacher);
		}

		public function get_all(){
			return $this->teacher_list;
		}

		public function delete_by_id($id){
			$status = false;

			foreach($this->teacher_list as $key=>$student){
				if($student->get_id() == $id){
					unset($teacher_list[$key]);
					$status = false;
				}


			}
				return $status;

		}

		public function get_by_id($id){
			$student = null;
			foreach($this->teacher_list as $value){
				if($value->get_id() == $id){
					$student = $value;

				}

			}
				return $student;
		}
	}
?>