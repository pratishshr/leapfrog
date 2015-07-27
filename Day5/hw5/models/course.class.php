<?php
	class Course{
		private $id;
		private $course_name;
		private $course_duration;
		private $teacher;

		public function __contruct(){

		}

		public function initiate($id,$course_name,$course_duration,$teacher){
			$this->id = $id;
			$this->course_name = $course_name;
			$this->course_duration = $course_duration;
			$this->teacher = $teacher;

		}

		public function get_id(){
			return $this->id;
		}

		public function set_id(){
			$this->id = $id;
		}

		public function get_course_name(){
			return $this->course_name;
		}

		public function set_first_name($course_name){
			$this->first_name = $course_name;
		}

		public function get_course_duration(){
			return $this->course_duration;
		}

		public function set_course_duration($course_duration){
			$this->last_name = $course_duration;
		}

		public function get_teacher(){
			return $this->teacher;

		}
		public function set_teacher($teacher){
			$this->$teacher = $teacher;
		}



	}

?>