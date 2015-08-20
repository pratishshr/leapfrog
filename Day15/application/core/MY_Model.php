<?php

class MY_Model extends CI_Model{

	var $_TABLES=array();

	public function __construct(){
		parent::__construct();
	}

	public function insert($table_name,$data){
		return $this->db->insert($this->_TABLES[$table_name],$data);
	}

	public function update($table_name,$data,$where){
		return $this->db->update($this->_TABLES[$table_name],$data,$where);
	}

	public function delete($table_name,$where){
		return $this->db->delete($this->_TABLES[$table_name],$where);
	}


}