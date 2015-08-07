<?php include_once(ROOT_PATH."/system/model/product.class.php");?>
<?php include_once(ROOT_PATH."/system/repository/productrepository.class.php");?>

<?php
	class AdminProductController{
		private $productrepository;

		public function __construct(){
			$this->productrepository = new ProductRepository();
		}
		public function index(){

			include_once(ROOT_PATH."/views/admin/products/index.php");

		}
		public function add(){
			if(isset($_POST['submit'])){
				
				$product = $this->map_data();
				$this->productrepository->insert($product);
				header("Location: index.php?page=admin&action=success");
			}
			include_once(ROOT_PATH."/views/admin/products/add.php");

		}
		public function map_data(){
				$product = new Product();

				$product->set_product_name($_POST['product_name']);
				$product->set_price($_POST['price']);

				//store file
				$filename = $_FILES['image']['name'];
				$path = ROOT_PATH. "/uploads/";
				
				move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);
				

				$product->set_image($path.$filename);
				$product->set_details($_POST['details']);

				return $product;

		}
		public function edit(){

			
			if(empty($_POST)){
			$product = $this->productrepository->get_by_id($_GET['id']);

				if(is_null($product)){
					header("index.php?page=admin");
					exit;
				}	
			
			include(ROOT_PATH."/views/admin/products/edit.php");
			}else{
				$id =$_POST['id'];
				$product = $this->map_data();
				$product->set_id($id);
				$this->productrepository->update($product);
				header("Location:index.php?page=admin&action=success");
			}
		}

		public function delete(){
			$id = $_GET['id'];
			$this->productrepository->delete($id);
			header("Location: index.php?page=admin&action=delete");
		}

	}

	$adminproductcontroller = new AdminProductController();
	if(isset($_GET['m'])){
		$method = $_GET['m'];
	}else{
		$method = "index";
	}

	switch($method){
		case 'add':
			$adminproductcontroller->add();
			break;
		case 'edit':
			$adminproductcontroller->edit();
			break;
		case 'delete':
			$adminproductcontroller->delete();
			break;
		default:
		 	$adminproductcontroller->index();
		 	break;
	}

		

?>