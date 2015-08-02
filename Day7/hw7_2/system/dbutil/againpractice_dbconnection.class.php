<?php
	class DBConnection{
		private $conn = null;

		public function __construct(){

		}

		public function connect(){
			$this->conn  = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);
			if($this->conn->connect_error){
				echo("CONNECTION FAILURE ".$this->conn->connect_error);
			}
		}

		public function fetch_query($sql){

			return $this->conn->query($sql);

		}

		public function close(){
			if($conn!=null){
				$this->conn->close();
			}
		}
	}
?>