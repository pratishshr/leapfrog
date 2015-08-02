<?php
	class DBConnection{
		private $conn;

		public function __construct(){

		}

		public function connect(){
			$this->conn = new mysqli("localhost","root","damcare","loginpractice");

			if($this->conn->connect_error){
				echo (" Connection Error " . $this->conn->connect_error);
			}
		}

		public function fetchquery($sql){
			return $this->conn->query($sql);
		}

		public function close(){
			$this->conn->close();
		}
	}
?>