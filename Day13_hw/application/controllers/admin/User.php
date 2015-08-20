<?php

class User extends AdminController{

	public function __construct(){
		parent::__construct();

		$this->load->model('user_model');
	}

	public function index(){

		$data['users'] = $this->user_model->get_users();
		$data['view_page'] = "admin/user/index";
		$this->load->view($this->_container,$data);
	}

	public function add(){
		if(!is_null($this->input->post('submit'))){
		
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['status'] = $this->input->post('status');
 			$this->user_model->insert('USERS',$data);
			redirect("admin/user");

		}else{
		$data['view_page'] = "admin/user/add";
		$this->load->view($this->_container,$data);
		}
	}

	public function edit($id){
		if(!is_null($this->input->post('submit'))){
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['status'] = $this->input->post('status');
					
			$data['id'] = $this->input->post('id');
			$where = $data['id'];
				
 			$this->user_model->update('USERS',$data,$where);
 		
			redirect("admin/user");
		}else{
		$data['user'] = $this->user_model->get_by_id($id);
		$data['view_page'] = "admin/user/insert";
		$this->load->view($this->_container,$data);
		}		
	}



	public function delete($where){

		$result = $this->user_model->delete('USERS',$where);
		redirect('admin/user');
	}
}