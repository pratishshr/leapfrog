<?php

class AdminController{

	protected $isLoggedIn;



	public function __construct(){

		$this->isLoggedIn=true;

		echo "I am here";

		if(!$this->isLoggedIn){
			header("location:login.php");
		}
	
	}

	
}