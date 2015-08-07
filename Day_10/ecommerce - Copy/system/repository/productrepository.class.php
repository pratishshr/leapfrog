<?php
	class ProductRepository{
		private $db = null;

		public function __construct(){
			$this->db  = new DBConnection();
		}

		public function get_all(){
			$product_list = array();
			//connnect
			$this->db->connect();

			//query
			$sql = "SELECT * FROM products";

			//fetchquery
			$result = $this->db->fetchquery($sql);

			while($row = $result->fetch_assoc()){
				$product = new Product();
				$product->set_id($row['id']);
				$product->set_product_name($row['product_name']);
				$product->set_price($row['price']);
				$product->set_image($row['image']);
				$product->set_details($row['details']);

				array_push($product_list,$product);

			}
			$this->db->close();
			return $product_list;
		}

		public function get_by_id($id){
			//connect
			$this->db->connect();

			//query
			$sql = "SELECT * FROM products WHERE id=?";

			//prepare
			$stmt = $this->db->initialize($sql);

			//bind
			$stmt->bind_param("i",$id);


			//execute
			$stmt->execute();

			$stmt->bind_result($id,$product_name,$price,$image,$details);

			while($row = $stmt->fetch()){
			$product = new Product();
			$product->set_id($id);
			$product->set_product_name($product_name);
			$product->set_price($price);
			$product->set_image($image);
			$product->set_details($details);
			}
			return $product;

		}

		public function insert($product){
			//connect
			$this->db->connect();

			//query
			$sql = "INSERT INTO products(product_name,price,image,details) VALUES(?,?,?,?)";

			//prepare
			$stmt = $this->db->initialize($sql);
			
			//set values
			$product_name = $product->get_product_name();
			$price = $product->get_price();
			$image = $product->get_image();
			$details = $product->get_details();
			
			//bind
			$stmt->bind_param("siss",$product_name,$price,$image,$details);

			//execute
			$result = $stmt->execute();

			$this->db->close();
			return $result;

		}

		public function update($product){
			//connect
			$this->db->connect();

			//query
			$sql = "UPDATE products SET product_name=?,price=?,image=?,details=? WHERE id=?";

			//prepare
			$stmt = $this->db->initialize($sql);

			//set values
			$product_name = $product->get_product_name();
			$price = $product->get_price();
			$image = $product->get_image();
			$details = $product->get_details();
			$id = $product->get_id();
			
			//bind
			$stmt->bind_param("sissi",$product_name,$price,$image,$details,$id);

			//execute
			$result = $stmt->execute();

			$this->db->close();
			return $result;
		}

		public function delete($id){
			
			$this->db->connect();

			$sql = "DELETE FROM products WHERE id=?";

			$stmt = $this->db->initialize($sql);

			$stmt->bind_param('i',$id);

			$stmt->execute();

			$this->db->close();
		}
	}
?>