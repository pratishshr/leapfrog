<?php

	class Category_model extends CI_Model{

		public function __construct(){
			parent::__construct();
		}

		public function getCategories(){
			return $this->db->select("*")->from('tbl_categories')->get();
		}
	
	}