<?php
	class Facilitator extends AdminController{

		public function __construct(){
			parent::__construct();
			$this->load->model('facilitator_model');
		}

		public function index($action=null){

			if(!is_null($action)){

				$data['action'] = $action;
			}else{
				$data['action'] = null;
			}

			$data['facilitators'] = $this->facilitator_model->get_all();
			$data['view_page'] = "admin/facilitator/index";
			$this->load->view($this->_container,$data);
		}

		public function add(){

			if(!is_null($this->input->post('submit'))){
				
				$table_name = 'FACILITATORS';
				$data = $this->_map_posted_data();
				$this->facilitator_model->insert($table_name,$data);
				redirect('admin/facilitator/index/added');
			}
			else{
				$data['view_page'] = "admin/facilitator/add";
				$this->load->view($this->_container,$data);
			}
		}

		private function _map_posted_data(){
			
			$data['first_name'] = ucfirst(strtolower($this->input->post('first_name')));
			$data['last_name'] = ucfirst(strtolower($this->input->post('last_name')));
			$data['email'] = $this->input->post('email');
			$data['contact_no'] = $this->input->post('contact_no');
			$data['status'] = $this->input->post('status');
			return $data;
		}

		public function edit($id){
			if(!is_null($this->input->post('submit'))){
				$table_name ='FACILITATORS';
				$data = $this->_map_posted_data();
				$data['modified_date'] = date('Y-m-d H-i-s');
				$this->facilitator_model->update($table_name,$data,array('id'=>$id));
				redirect('admin/facilitator/index/edited');

			}else{

				$data['facilitator'] = $this->facilitator_model->get_by_id($id);
				$data['view_page'] = 'admin/facilitator/edit';
				$this->load->view($this->_container,$data);
			}
		}

		public function delete($id){
	
			$table_name = 'FACILITATORS';
			$this->facilitator_model->delete($table_name,array('id'=>$id));
			redirect("admin/facilitator/index/deleted");


		}
	}