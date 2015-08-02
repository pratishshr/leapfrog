<?php
	class Students{
		private $id;
		private $first_name;
		private $last_name;
		private $email;
		private $contact_no;
		private $course;

		public function __construct(){

		}

		public function get_id(){
			return $this->id;
		}

		public function set_id($id){
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
		
		public function get_contact_no(){
			return $this->contact_no;
		}

		public function set_contact_no($contact_no){
			$this->contact_no = $contact_no;
		}
		
		public function get_course(){
			return $this->course;
		}

		public function set_course($course){
			$this->course = $course;
		}
	}
?>