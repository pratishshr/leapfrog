<?php 

	class DBConnection{
		private $conn = null;

		public function __construct(){

		}

		public function connect(){
			//connect to database

			$this->conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);

			if($this->conn->connect_error){
				echo("Connection failed". $this->conn->connect_error);
			}

		}

		public function initialize($sql){
			return $this->conn->prepare($sql);
		}
		public function fetchquery($sql){
			return $this->conn->query($sql);
		}

		public function close(){
			$this->conn->close();
		}
	}

 ?>