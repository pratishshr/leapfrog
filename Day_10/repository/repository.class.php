<?php

	class repository{
		private $db;

		public function __construct(){
			$this->db = new DBConnection;
		}
		public function get_all(){
				$userlist = array();
				
				$this->db->connect();

				$sql = "SELECT * FROM users";

				$result = $this->db->fetchquery($sql);

				
				

				while($row  = $result->fetch_assoc()){
					$user = new User();

					$user->set_id($row['id']);
					$user->set_username($row['username']);
					$user->set_password($row['password']);

					array_push($userlist,$user);

				}
				return $userlist;



		}
	}
?>