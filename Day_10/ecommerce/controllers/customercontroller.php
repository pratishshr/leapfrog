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

		default: 
		$customercontroller->index();
	}
?>