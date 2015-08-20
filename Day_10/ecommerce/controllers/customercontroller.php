<?php include_once(ROOT_PATH."/system/model/product.class.php");?>
<?php include_once(ROOT_PATH."/system/repository/productrepository.class.php");?>

<?php
	class CustomerController{
		private $productrepository;
		public function __construct(){
			$this->productrepository = new ProductRepository();
		}

		public function index(){
			include(ROOT_PATH."/views/customer/index.php");
		}

		public function elex(){
			include(ROOT_PATH."/views/customer/electronics.php");
		}

		public function clothes(){
			include(ROOT_PATH."/views/customer/clothes.php");
		}

		public function mobile(){
			include(ROOT_PATH."/views/customer/mobile.php");
		}
	}

	$customercontroller = new CustomerController();

	if(isset($_GET['m'])){
		$method = $_GET['m'];
	}else{
		$method = "index";
	}	

	switch($method){
		case 'index':
		$customercontroller->index();
		break;

		case 'elex':
		$customercontroller->elex();
		break;

		case 'clothes':
		$customercontroller->clothes();
		break;

		case 'mobile':
		$customercontroller->mobile();
		break;

		default: 
		$customercontroller->index();
	}
?>