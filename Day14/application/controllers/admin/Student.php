<?php
	class Student extends AdminController{

		public function __construct(){
			parent::__construct();
			$this->load->model('student_model');
		}

		public function index($action=null){

			if(!is_null($action)){

				$data['action'] = $action;
			}else{
				$data['action'] = null;
			}

			$data['students'] = $this->student_model->get_all();
			$data['view_page'] = "admin/student/index";
			$this->load->view($this->_container,$data);
		}

		public function add(){

			if(!is_null($this->input->post('submit'))){
				
				$table_name = 'STUDENTS';
				$data = $this->_map_posted_data();
				$this->student_model->insert($table_name,$data);
				redirect('admin/student/index/added');
			}
			else{
				$data['view_page'] = "admin/student/add";
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
				$table_name ='STUDENTS';
				$data = $this->_map_posted_data();
				$data['modified_date'] = date('Y-m-d H-i-s');
				$this->student_model->update($table_name,$data,array('id'=>$id));
				redirect('admin/student/index/edited');

			}else{

				$data['student'] = $this->student_model->get_by_id($id);
				$data['view_page'] = 'admin/student/edit';
				$this->load->view($this->_container,$data);
			}
		}

		public function delete($id){
	
			$table_name = 'STUDENTS';
			$this->student_model->delete($table_name,array('id'=>$id));
			redirect("admin/student/index/deleted");


		}
	}