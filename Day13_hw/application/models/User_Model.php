<?php

	class User_Model extends MY_Model {

		public function __construct(){
			parent::__construct();
			$this->_TABLES = array('USERS'=>'tbl_users');
		}	

		public function get_users(){
			return $this->db->select('*')->from($this->_TABLES['USERS'])->get();
		}

		public function get_by_id($id){
			return $this->db->select('*')->from($this->_TABLES['USERS'])->where(array('id'=>$id))->get();
		}

		
	}