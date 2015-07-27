<?php
	class TeacherRepository{
		private $teacher_list = array();

		public function get_all(){
			return $this->teacher_list;
		}

		public function add($teacher){
			array_push($this->teacher_list,$teacher);
		}

		public function delete_by_id($id){
			$status = false;
			foreach($this->teacher_list as $key=>$teacher){
				if($teacher->get_id() == $id){
					unset($this->teacher_lsit[$key]);
					$status = true;
					break;
				}
			}
			return $status;

		}

		public function get_by_id($id){
			$teacher = null;
			foreach($this->teacher_list as $value){
				if($value->get_id() == $id){
					$teacher = $value;
					break;
				}
			}
			return $teacher;
		}
	}

?>