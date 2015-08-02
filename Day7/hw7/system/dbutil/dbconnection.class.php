<?php
	class DBConnection{

		private $conn=null;
		public function __contruct(){

		}	

		public function connect(){
			$this->conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);
			if($this->conn->connect_error){
				echo ("Connection problem".$this->conn->connect_error);
			}
		}

		public function fetch_query($sql){

			return $this->conn->query($sql); 

		}

		public function close(){
			if(!is_null($this->conn)){
				$this->conn->close();
				$this->conn=null;
			}
		}
	}
?>