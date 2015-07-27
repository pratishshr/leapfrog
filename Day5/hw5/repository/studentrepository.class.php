<?php
	class StudentRepository{
		private $student_list = array();

		public function add($student){
			array_push($this->student_list,$student);

		}

		public function delete_by_id($id){
		$status = false;
		foreach($this->student_list as $key=>$student){
				if($student->get_id()==$id){
					unset($this->$student_list[$key]);
					$status= true;
					break;
				}
			}
			return $status;
	    }

	    public function get_all(){
	    	return $this->student_list;
	    }

	    public function get_by_id($id){
	    	$student= null;
	    	foreach($this->student_list as $value){
	    		if($value->get_id() == $id){
	    			$student = $value;
	    			break;
	    		}
	    	}
	    		return $student;
	    }
	  
	

	}
?>