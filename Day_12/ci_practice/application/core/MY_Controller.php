<?php

	class BaseController extends CI_Controller{
		
		public function __construct(){
		parent::__construct();
		$this->load->helper("url"); 

		}




	}

	class AdminController extends BaseController{

		public function __construct(){

			parent:: __construct();

			if(!$this->check_login()){
				redirect("login");
				exit();
			}	

		}

		private function check_login(){
			return false;

		}
	
	}