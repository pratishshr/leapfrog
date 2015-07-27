<?php

class DBConnection{

	private $conn=null;



	public function __construct(){

	}

	public function connect(){

		$this->conn=new Mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);
		
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		} 		

	}

	public function fetchQuery($sql){
		return $this->conn->query($sql);
	}


	public function close(){
		if(!is_null($this->conn)){
			$this->conn->close();
			$this->conn=null;
		}
	}


}