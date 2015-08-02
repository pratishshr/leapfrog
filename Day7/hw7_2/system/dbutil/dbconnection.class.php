<?php
	class DBConnection{
		private $conn=null;

		public function __construct(){

		}

		public function connect(){
			//database connection
			$this->conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);

			//check connection
			if($this->conn->connect_error){
				echo ("CONNECTION FAILED".$this->conn->connect_error);
			}
		}

		public function fetch_query($sql){

			return $this->conn->query($sql);

		}

		public function close(){
			if($this->conn!=null){
				$this->conn->close();
				$conn = null;
			}
		}
	}
?>