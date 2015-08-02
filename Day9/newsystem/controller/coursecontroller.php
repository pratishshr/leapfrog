<?php LoadHelper::model("course");?>
<?php LoadHelper::repository("courserepository");?>



<?php
	class CourseController{

		private $courserepository;

		public function __construct(){
			$this->courserepository = new courserepository();
		}

		public function index(){
			if(isset($_POST['sort'])){
				$order=$_POST['sort'];

			}else{
				$order=null;
			}
			include_once(ROOT_PATH."view/Course/index.php");
		}

		public function add(){
			if(isset($_POST['submit'])){
				
				$Course = $this->map_data();
				$this->courserepository->insert($Course);
				header("Location: index.php?page=course&action=success");
				exit;

			}
			include_once(ROOT_PATH."view/Course/add.php");
		}

		private function map_data(){
			$Course = new Course();

				$Course->set_course_name($_POST['course_name']);
				$Course->set_status($_POST['status']);
				

				return $Course;
		}

		public function edit(){
			// if(isset($_POST['submit'])){
			// 	$Course = $this->map_data();
			// 	$Course->set_id($_POST['id']);

			// 	$this->courserepository->update($Course);
			// 	header("Location: index.php?page=Course&action=success");

			// }else{
			// 	$Course = $this->courserepository->get_by_id($_GET['id']);
			// 	include_once(ROOT_PATH."view/Course/edit.php");
			// }	


			if(empty($_POST)){
			$e=$this->courserepository->get_by_id($_GET['id']);
			
			if(is_null($e)){
			  header("location:index.php?page=Course");
			}			

			include_once(ROOT_PATH.'view/Course/edit.php');
			
			}else{
				$Course=$this->map_data();
			    $Course->set_id($_POST['id']);
			    $Course=$this->courserepository->update($Course);
				header("location:index.php?page=Course&action=success");

			}
		}

		public function delete(){
			$id =$_GET['id'];
			$this->courserepository->delete($id);
			header("Location: index.php?page=Course&action=delete");

		}
	}


	if(isset($_GET['m'])){
		$method = $_GET['m'];
	}else{
		$method = "index";
	}
	
	$Coursecontroller = new CourseController();

	switch($method){
		case 'add':
			$Coursecontroller->add();
			break;

		case 'edit':
			$Coursecontroller->edit();
			break;

		case 'delete':
			$Coursecontroller->delete();		
			break;

		default:
			$Coursecontroller->index();	
	}

?>