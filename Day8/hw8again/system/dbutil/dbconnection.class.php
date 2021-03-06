<?php
	class DBConnection{
		private $conn = null;

		public function __construct(){

		}

		public function connect(){
			$this->conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);

			if($this->conn->connect_error){
				echo ("Connection problem : ".$this->conn->connect_error);
			}
		}

		public function fetchquery($sql){

			return $this->conn->query($sql);

		}

		public function initialize($sql){
			return $this->conn->prepare($sql);

		}

		public function close(){
			if($this->conn != null){
				$this->conn->close();
			}
		}
	}
?>