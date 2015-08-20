<?php

class Course extends AdminController{

	public function __construct(){
		parent::__construct();

		$this->load->model('course_model');
	}

	public function index($offset=NULL){

		$this->load->library('pagination');

		$limit=4;



		$config=$this->admin_pagination_config();

		$config['base_url'] = site_url('admin/course/index');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->course_model->count();
		$config['per_page'] = $limit;



		$this->pagination->initialize($config);


		$data['contacts']=$this->course_model->get_courses(NULL,'id desc',array('LIMIT'=>$limit,'OFFSET'=>$offset));
		$data['view_page']="admin/course/index";

		$this->load->view($this->_container,$data);
		
	}


	public function table($offset=0){
		$this->load->library('pagination');

		$limit=4;



		$config=$this->admin_pagination_config();

		$config['base_url'] = site_url('admin/course/index');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->course_model->count();
		$config['per_page'] = $limit;



		$this->pagination->initialize($config);


		$data['contacts']=$this->course_model->get_courses(NULL,'id desc',array('LIMIT'=>$limit,'OFFSET'=>$offset));
		

		$this->load->view("admin/course/table",$data);		
	}

	public function edit($id=NULL){
		$course=$this->course_model->get_by_id($id);
		echo json_encode($course);
	}

	public function save(){

		$success=FALSE;

		$posted_data=$this->_map_posted_data();

		if($posted_data['id']==''){
			$success= $this->course_model->insert('COURSES',$posted_data);
		}
		else{
			$success= $this->course_model->update('COURSES',$posted_data,array('id'=>$posted_data['id']));
		}

	  echo json_encode(array('success'=>$success));

	}

	private function _map_posted_data(){
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['price']=$this->input->post('price');
		$data['status']=$this->input->post('status');
		return $data;
	}
}