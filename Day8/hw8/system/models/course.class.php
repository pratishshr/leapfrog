<?php
	class course{
		private $id;
		private $course_name;
		private $duration;
		private $status;

		public function __construct(){

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

		public function get_duration(){
			return $this->duration;
		}

		public function set_duration($duration){
			$this->duration = $duration;
		}

		public function get_status(){
			return $this->status;
		}

		public function set_status($status){
			$this->status = $status;
		}
	}
?>