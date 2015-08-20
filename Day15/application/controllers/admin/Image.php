<?php

class Image extends AdminController{

	public function __construct(){
		parent::__construct();

		$this->load->model('image_model');
	}

	public function index($offset=NULL){

		$this->load->library('pagination');

		$limit=4;



		$config=$this->admin_pagination_config();

		$config['base_url'] = site_url('admin/image/index');
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->image_model->count();
		$config['per_page'] = $limit;



		$this->pagination->initialize($config);


		$data['images']=$this->image_model->get_images(NULL,'id desc',array('LIMIT'=>$limit,'OFFSET'=>$offset));
		$data['view_page']="admin/image/index";

		$this->load->view($this->_container,$data);
		
	}

	public function add(){
			    $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                /*$config['max_size']             = 1024*10*3;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;*/

                $this->load->library('upload', $config);		

		if(!$this->input->post()){

			$data['view_page']="admin/image/add";

			$this->load->view($this->_container,$data);
		}
		else{


				if ( ! $this->upload->do_upload('image_name'))
				                {

				                        $error = array('error' => $this->upload->display_errors());

										$data['view_page']="admin/image/add";

										$this->load->view($this->_container,$data);
				                }
				                else
				                {
				                        $data =  $this->upload->data();

										$iconfig['image_library'] = 'gd2';
										$iconfig['source_image'] = $data['full_path'];
										$iconfig['new_image'] ='uploads/thumb/' . $data['file_name'];
										$iconfig['maintain_ratio'] = TRUE;
										$iconfig['width']         = 75;
										$iconfig['height']       = 50;

										$this->load->library('image_lib', $iconfig);

										$this->image_lib->resize();

										$this->image_model->insert('IMAGES',array('image_name'=>$data['file_name']));
				                       

				                        redirect(site_url('admin/image'));
				                } 

	    }
				



	}
}