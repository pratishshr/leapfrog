<?php 
	class Home extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('category_model','category');

		}

		public function index(){
			$data['categories'] = $this->category->getCategories();
					
			$this->load->view("home/index",$data);
		}

		public function about(){
			echo "About us";

		}

		public function greeting($name="Pratish"){
			echo "Hello ". $name;
		}


	}
