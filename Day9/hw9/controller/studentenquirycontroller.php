<?php require_once(ROOT_PATH."system/dbutil/dbconnection.class.php");?>
<?php require_once(ROOT_PATH."system/model/students.class.php");?>
<?php require_once(ROOT_PATH."system/repository/studentrepository.class.php");?>

<?php
	class StudentEnquiryController{
		private  $studentrepository; 

		public function __construct(){
			$this->studentrepository = new StudentRepository();

		}
		public function index(){
			include_once(ROOT_PATH.'views/students/enquiry/index.php');
		}

		public function add(){
			if(empty($_POST)){
			include_once(ROOT_PATH.'views/students/enquiry/add.php');
		}else{
			$student = $this->_map_posted_data();
			$result = $this->studentrepository->insert($student);
			header("Location: index.php?page=senquiry&success=true");
		}
		}	
		public function edit(){

		}

		private function _map_posted_data(){
			$students = new Students();

	$students->set_first_name($_POST['first_name']);
	$students->set_last_name($_POST['last_name']);
	$students->set_email($_POST['email']);
	$students->set_contact_no($_POST['contact_no']);
	$students->set_course($_POST['course']);

	return $students;
		}

		public function delete(){

		}
	}

	$method = isset($_GET['m'])?$_GET['m']:'index';
	
	$enquiry_controller = new StudentEnquiryController();

	switch($method){

		case 'add':
			$enquiry_controller -> add();
			break;
		case 'edit':
			$enquiry_controller -> edit();
			break;
		case 'delete':
			$enquiry_controller -> delete();
			break;
		default: 
			$enquiry_controller -> index();
			break;			
	}

?>