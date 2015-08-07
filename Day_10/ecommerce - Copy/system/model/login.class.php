<?php
	class User{
		private $db;

		public function __construct(){
			$this->db = new DBconnection();
		}


		public function check_login($username, $password){ 

			 $this->db->connect();
			 

			 $sql="SELECT id FROM users WHERE username='$username' and password='$password'";
			 //checking if the username is available in the table 
			 $result = $this->db->fetchquery($sql);
			 $row = $result->fetch_assoc();
			 if ($row > 0) { 
			 // this login var will use for the session thing 
			  	$_SESSION['login'] = true; 
			   	$_SESSION['id'] = $row['id'];
			    return true; 
			 } else{ 
			 	return false;
			    } 
			    
		}	
	}
?>