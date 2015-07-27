<?php


class StudentRepository{

	private $student_list=array();


	public function add($student){
		//$this->student_list[]=$student;
		array_push($this->student_list,$student);
	}

	public function get_all(){
		return $this->student_list;
	}

	public function search($param){

	}

	public function delete($id){

		$success=false;

		foreach($this->student_list as $key=>$student){

			if($student->get_id()==$id){
				unset($this->student_list[$key]);
				$success=true;
				break;
			}
		}

		return $success;

	}

	public function get_by_id($id){
		$student=null;
		foreach($this->student_list as $std){

			if($std->get_id()==$id){
				$student=$std;
				break;
			}
		}

		return $student;
	}




}
