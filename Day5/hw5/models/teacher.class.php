<?php
	class Teacher{
		private $id;
		private $first_name;
		private $last_name;
		private $email;
		private $faculty;

		public function __contruct(){

		}

		public function initiate($id,$first_name,$last_name,$email,$faculty){
			$this->id = $id;
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->email = $email;
			$this->faculty = $faculty;

		}

		public function get_id(){
			return $this->id;
		}

		public function set_id(){
			$this->id = $id;
		}

		public function get_first_name(){
			return $this->first_name;
		}

		public function set_first_name($first_name){
			$this->first_name = $first_name;
		}

		public function get_last_name(){
			return $this->last_name;
		}

		public function set_last_name($last_name){
			$this->last_name = $last_name;
		}

		public function get_email(){
			return $this->email;
		}
		public function set_email($email){
			$this->email = $email;
		}

		public function get_faculty(){
			return $this->faculty;
		}

		public function set_faculty($faculty){
			$this->faculty = $faculty;
		}




	}

?>