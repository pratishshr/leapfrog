<?php
	class StudentRepository{
		private $studentlist = array();

		public function add($student){
			array_push($this->studentlist, $student);
		}

		public function delete($student){
			$success = false;
			foreach($this->studentlist as $key=>$student){
				if($this->studentlist == $student){
					unset($this->studentlist[$key]);
					$success = true;
					break; 
				}
			}
			return $success;	
		}

		public function get_all(){
			return $this->studentlist;
		}

		public function get_by_id($id){
			$student = null;
			foreach($this->studentlist as $std){
				if($std->get_id() == $id){
					$student = $std;
					break;
				}
			}
			return $student;
		}


	

	}

?>