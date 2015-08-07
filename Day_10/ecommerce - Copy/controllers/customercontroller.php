<?php
	class CustomerController{

		public function __construct(){

		}

		public function index(){
			include(ROOT_PATH."/views/customer/index.php");
		}
	}

	$customercontroller = new CustomerController();

	if(isset($_GET['m'])){
		$method = $_GET['m'];
	}else{
		$method = "index";
	}	

	switch($method){
		case 'index':
		$customercontroller->index();
		break;

		default: 
		$customercontroller->index();
	}
?>