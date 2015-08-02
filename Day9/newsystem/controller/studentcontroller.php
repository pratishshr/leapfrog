<?php LoadHelper::model("students");?>
<?php LoadHelper::repository("studentrepository");?>



<?php
	class StudentController{

		private $studentrepository;

		public function __construct(){
			$this->studentrepository = new StudentRepository();
		}

		public function index(){
			if(isset($_POST['sort'])){
				$order=$_POST['sort'];

			}else{
				$order=null;
			}
			include_once(ROOT_PATH."view/student/index.php");
		}

		public function add(){
			LoadHelper::model("course");
			LoadHelper::repository("courserepository");
			$course_repository=new CourseRepository();

			if(isset($_POST['submit'])){
				
				$student = $this->map_data();
				$this->studentrepository->insert($student);
				header("Location: index.php?page=student&action=success");
				exit;

			}
			include_once(ROOT_PATH."view/student/add.php");
		}

		private function map_data(){
			$student = new Students();

				$student->set_first_name($_POST['first_name']);
				$student->set_last_name($_POST['last_name']);
				$student->set_email($_POST['email']);
				$student->set_contact_no($_POST['contact_no']);
				$student->set_course($_POST['course_id']);

				return $student;
		}

		public function edit(){
			// if(isset($_POST['submit'])){
			// 	$student = $this->map_data();
			// 	$student->set_id($_POST['id']);

			// 	$this->studentrepository->update($student);
			// 	header("Location: index.php?page=student&action=success");

			// }else{
			// 	$student = $this->studentrepository->get_by_id($_GET['id']);
			// 	include_once(ROOT_PATH."view/student/edit.php");
			// }	


			if(empty($_POST)){
			$e=$this->studentrepository->get_by_id($_GET['id']);
			
			if(is_null($e)){
			  header("location:index.php?page=student");
			}			

			include_once(ROOT_PATH.'view/student/edit.php');
			
			}else{
				$student=$this->map_data();
			    $student->set_id($_POST['id']);
			    $student=$this->studentrepository->update($student);
				header("location:index.php?page=student&action=success");

			}
		}

		public function delete(){
			$id =$_GET['id'];
			$this->studentrepository->delete($id);
			header("Location: index.php?page=student&action=delete");

		}
	}


	if(isset($_GET['m'])){
		$method = $_GET['m'];
	}else{
		$method = "index";
	}
	
	$studentcontroller = new StudentController();

	switch($method){
		case 'add':
			$studentcontroller->add();
			break;

		case 'edit':
			$studentcontroller->edit();
			break;

		case 'delete':
			$studentcontroller->delete();		
			break;

		default:
			$studentcontroller->index();	
	}

?>