<?php
	class AdminController extends MY_Controller{

		protected $_container;

		public function __construct(){

			parent::__construct();

			$this->_container = "admin/container";
		}

	}
?>	
