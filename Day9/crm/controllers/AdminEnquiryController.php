<?php 

 include_once(ROOT_PATH."system/models/enquiry.class.php");
 include_once(ROOT_PATH."system/repository/enquiry_repository.class.php");
 include_once("AdminController.php");



class AdminEnquiryController extends AdminController{

	private  $enquiry_repository;


	public function __construct(){
		parent::__construct();

		$this->enquiry_repository=new EnquiryRepository();
	}

	public function index(){


		include_once(ROOT_PATH.'views/admin/enquiry/index.php');

	}

	public function add(){

		if(empty($_POST)){

		include_once(ROOT_PATH.'views/admin/enquiry/add.php');
		}
		else{

			$enquiry=$this->_map_posted_data();
			$result=$this->enquiry_repository->insert($enquiry);
			header("location:index.php?page=aenquiry&success=true");

		}

	}

	private function _map_posted_data(){

		$enquiry=new Enquiry();

		$enquiry->set_company_name($_POST['company_name']);
		$enquiry->set_first_name($_POST['first_name']);
		$enquiry->set_last_name($_POST['last_name']);
		$enquiry->set_email($_POST['email']);
		$enquiry->set_contact_no($_POST['contact_no']);
		$enquiry->set_subject($_POST['subject']);
		$enquiry->set_message($_POST['message']);

		$enquiry->set_enquiry_date(date('Y-m-d H:i:s'));		

		return $enquiry;

	}

	public function edit(){

		if(empty($_POST)){
		$e=$this->enquiry_repository->get_by_id($_GET['id']);
		if(is_null($e)){
		  header("location:index.php?page=aenquiry");
		}			

		include_once(ROOT_PATH.'views/admin/enquiry/edit.php');
		}
		else{


			$enquiry=$this->_map_posted_data();
		    $enquiry->set_id($_POST['id']);
			$result=$this->enquiry_repository->update($enquiry);
			header("location:index.php?page=aenquiry&success=true");

		}


	}

	public function delete(){

	if(isset($_GET['id'])){
		$this->enquiry_repository->delete($_GET['id']);
		header("location:index.php?page=aenquiry");
	}		

	}

	public function get_json(){

		
		echo '<pre>';
		print_r($this->enquiry_repository->get_all('id desc'));

	}

}

$method=isset($_GET['m'])?$_GET['m']:'index';

$enquiry_controller=new AdminEnquiryController();

switch($method){

	case 'add':
		$enquiry_controller->add();
		break;
	case 'edit':
		$enquiry_controller->edit();
		break;
	case 'delete':
		$enquiry_controller->delete();
		break;

	case 'json':
		$enquiry_controller->get_json();
		break;		

	default:
		$enquiry_controller->index();
		break;						
}
