<?php
	class Facilitator_Model	 extends MY_Model{

		public function __construct(){
			parent::__construct();
			$this->_TABLES = array('FACILITATORS'=>'tbl_facilitators');
		}

		public function get_all(){
			$this->db->select('*');
			$this->db->from($this->_TABLES['FACILITATORS']);
			return $this->db->get();
		}

		public function get_by_id($id){
			$this->db->select('*');
			$this->db->from($this->_TABLES['FACILITATORS']);
			$this->db->where(array('id'=>$id));
			return $this->db->get();
		}
	}