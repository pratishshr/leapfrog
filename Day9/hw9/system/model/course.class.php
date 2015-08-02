<?php
	class Course{
		private $id;
		private $course_name;
		private $added_date;
		private $status;

		public function __contruct(){

		}

		public function get_id(){
			return $this->id;
		}

		public function set_id($id){
			$this->id = $id;
		}

		public function get_course_name(){
			return $this->course_name;
		}

		public function set_course_name($course_name){
			$this->course_name = $course_name;
		}

		public function get_added_date(){
			return $this->added_date;
		}

		public function set_added_date($added_date){
			$this->added_date = $added_date;
		}

		public function get_status(){
			return $this->status;
		}

		public function set_status($status){
			$this->status = $status;
		}

	}
?>