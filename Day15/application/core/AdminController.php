<?php

class AdminController extends MY_Controller{

	protected $_container;

	public function __construct(){
		parent::__construct();
		$this->_container = "admin/container";
	}

	public function admin_pagination_config(){
		$config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
		$config['first_tag_open'] ='<li>';
		$config['first_tag_close'] ='</li>';
		$config['cur_tag_open'] ='<li><a href="#">';
		$config['cur_tag_close'] ='</a></li>';


		$config['prev_tag_open'] ='<li>';
		$config['prev_tag_close'] ='</li>';		
		$config['next_tag_open'] ='<li>';
		$config['next_tag_close'] ='</li>';	
		$config['last_tag_open'] ='<li>';
		$config['last_tag_close'] ='</li>';		

		$config['num_tag_open'] ='<li>';
		$config['num_tag_close'] ='</li>';		
		$config['full_tag_close'] ='</ul>';
		return $config;
	}

}