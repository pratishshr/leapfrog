<?php

class Contact extends AdminController{

	public function __construct(){
		parent::__construct();

		$this->load->model('contact_model');
	}

	public function index($offset=NULL){

		$this->load->library('pagination');

		$limit=4;



		$config=$this->admin_pagination_config();

		$config['base_url'] = site_url('admin/contact/index');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->contact_model->count();
		$config['per_page'] = $limit;



		$this->pagination->initialize($config);


		$data['contacts']=$this->contact_model->get_contacts(NULL,'id desc',array('LIMIT'=>$limit,'OFFSET'=>$offset));
		$data['view_page']="admin/contact/index";

		$this->load->view($this->_container,$data);
		
	}
}