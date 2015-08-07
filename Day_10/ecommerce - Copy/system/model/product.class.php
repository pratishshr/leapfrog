<?php
	
	class Product{
		private $id;
		private $product_name;
		private $price;
		private $image;
		private $details;

		public function __construct(){

		}

		public function get_id(){
			return $this->id;
		}

		public function set_id($id){
			$this->id = $id;
		}

		public function get_product_name(){
			return $this->product_name;
		}

		public function set_product_name($product_name){
			$this->product_name = $product_name;
		}

		public function get_price(){
			return $this->price;
		}

		public function set_price($price){
			$this->price  = $price;
		}

		public function get_image(){
			return $this->image;
		}

		public function set_image($image){
			$this->image = $image;
		}

		public function get_details(){
			return $this->details;
		}

		public function set_details($details){
			$this->details = $details;

		}
	}

?>