<?php
	class Enquiry{
		private $id;
		private $company_name;
		private $first_name;
		private $last_name;
		private $email;
		private $contact_no;
		private $subject;
		private $message;
		private $enquiry_date;
		private $is_read;

		public function __construct(){

		}

		public function get_id(){
			return $this->id;
		}

		public function set_id($id){
			$this->id = $id;
		}

		public function get_company_name(){
			return $this->company_name;
		}

		public function set_company_name($company_name){
			$this->company_name = $company_name;
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

		public function get_subject(){
			return $this->subject;
		}

		public function set_subject($subject){
			$this->subject = $subject;
		}

		public function get_message(){
			return $this->message;
		}

		public function set_message($message){
			$this->message = $message;
		}

		public function get_enquiry_date(){
			return $this->enquiry_date;
		}

		public function set_enquiry_date($enquiry_date){
			$this->enquiry_date = $enquiry_date;
		}

		public function get_is_read(){
			return $this->is_read;
		}

		public function set_is_read($is_read){
			$this->is_read = $is_read;
		}



	}
?>