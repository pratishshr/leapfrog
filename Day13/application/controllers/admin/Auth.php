<?php

class Auth extends MY_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$this->login();

		
	}

	public function login(){
		$this->load->view('admin/auth/login');
	}

	public function forgot_password(){
		$this->load->view('admin/auth/forgot_password');
	}





}