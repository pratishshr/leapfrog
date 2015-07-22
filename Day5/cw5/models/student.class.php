<?php

 class Student{

	private  $id;
	private  $first_name;
	private  $last_name;
	private  $email;



	public function __construct(){
		
	}
	

	public function initialize($id,$first_name,$last_name,$email){
		$this->id=$id;
		$this->first_name=$first_name;
		$this->last_name=$last_name;
		$this->email=$email;

	}

	public function set_id($id){
		$this->id=$id;

	}

	public function get_id(){
		return $this->id;
	}

	public function get_first_name(){
		return $this->first_name;
	}

	public function set_first_name($first_name){
		$this->first_name=$first_name;
	}

	public function get_last_name(){
		return $this->last_name;
	}

	public function set_last_name($last_name){
		$this->last_name=$last_name;
	}

	public function get_email(){
		return $this->email;
	}

	public function set_email($email){
		$this->email=$email;
	}	

}









