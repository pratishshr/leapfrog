<?php
class  Enquiry{

	private $id;
	private $category_name;
	
	private $added_date;
	private $status;

	public function __construct(){

	}

	public function get_id(){
		return $this->id;
	}

	public function set_id($id){
		$this->id=$id;
	}

	public function get_category_name(){
		return $this->category_name;
	}

	public function set_category_name($category_name){
		$this->category_name=$category_name;
	}

	

	public function get_added_date(){
		return $this->added_date;
	}

	public function set_added_date($added_date){
		$this->added_date=$added_date;
	}

	public function get_status(){
		return $this->status;
	}

	public function set_status($status){
		$this->status=$status;
	}


}