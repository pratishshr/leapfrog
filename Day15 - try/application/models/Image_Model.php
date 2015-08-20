
<?php
class Image_Model extends MY_Model{

	public function __construct(){
		parent::__construct();

		$this->_TABLES=array('IMAGES'=>'tbl_images');

	}


	public function get_by_id($id){
		return $this->get_images(array('id'=>$id))->row();
	}

	public function get_images($where=NULL,$order_by=NULL,$limit=array('LIMIT'=>NULL,'OFFSET'=>NULL)){
		$this->db->select('*');
		$this->db->from($this->_TABLES['IMAGES']);

		if(!is_null($where)){
			$this->db->where($where);
		}

		if(!is_null($order_by)){
			$this->db->order_by($order_by);
		}

		if(!is_null($limit['LIMIT']) && !is_null($limit['OFFSET'])){
			$this->db->limit($limit['LIMIT'],$limit['OFFSET']);
		}
		elseif(!is_null($limit['LIMIT'])){
			$this->db->limit($limit['LIMIT']);
		}

		return $this->db->get();

	}

	public function count($where=NULL){

		if(!is_null($where)){
			$this->db->where($where);
		}
		$this->db->from($this->_TABLES['IMAGES']);
		return $this->db->count_all_results();

	}
}