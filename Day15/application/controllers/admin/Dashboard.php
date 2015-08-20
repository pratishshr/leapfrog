<?php

class Dashboard extends AdminController{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$data['view_page']="admin/dashboard/index";

		$this->load->view($this->_container,$data);
		
	}
}