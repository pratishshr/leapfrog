<?php
	class TeacherRepository{
		private $db;

		public function __construct(){
			$this->db = new DBConnection2();
		}

		public function get_all($order_by = null){
			$teacher_list = array();
			//database connection
			$this->db->connect();

			//query
			$sql = "SELECT * FROM teachers";
			if(!is_null($order_by)){
			$sql =$sql. " ORDER BY " . $order_by;
			}
			//fetchquery
			$result = $this->db->fetchquery($sql);

			while($row = $result->fetch_assoc()){
				$teacher = new Teachers();

				$teacher->set_id($row['id']);
				$teacher->set_first_name($row['first_name']);
				$teacher->set_last_name($row['last_name']);
				$teacher->set_email($row['email']);
				$teacher->set_contact_no($row['contact_no']);
				$teacher->set_faculty($row['faculty']);

				array_push($teacher_list, $teacher);
			}
				$this->db->close();

				return $teacher_list;
		}

		public function get_by_id($id){
			$this->db->connect();

			$sql = "SELECT * FROM teachers WHERE id=?";

			$stmt = $this->db->initialize($sql);

			$stmt->bind_param("i",$id);

			$stmt->execute();

			$stmt->bind_result($id,$first_name,$last_name,$email,$contact_no,$faculty);

			$teacher = new Teachers();

			while($row = $stmt->fetch()){
			$teacher->set_id($id);
			$teacher->set_first_name($first_name);
			$teacher->set_last_name($last_name);
			$teacher->set_email($email);
			$teacher->set_contact_no($contact_no);
			$teacher->set_faculty($faculty);
			}
			
			return $teacher;
			}

		public function insert($teacher){
			$this->db->connect();

			$sql = "INSERT INTO teachers(first_name,last_name,email,contact_no,faculty) VALUES(?,?,?,?,?)";

			$stmt = $this->db->initialize($sql);

			$stmt->bind_param("sssss",$first_name,$last_name,$email,$contact_no,$faculty);

			$first_name = $teacher->get_first_name();
			$last_name = $teacher->get_last_name();
			$email = $teacher->get_email();
			$contact_no = $teacher->get_contact_no();
			$faculty  = $teacher->get_faculty();

			$result = $stmt->execute();

			return $result;
		}

		public function update($teacher){
			$this->db->connect();

			$sql = "UPDATE teachers SET first_name=?,last_name=?,email=?,contact_no=?,faculty=? WHERE id=?";

			$stmt = $this->db->initialize($sql);

			$stmt->bind_param("sssssi",$first_name,$last_name,$email,$contact_no,$faculty,$id);

			$id =  $teacher->get_id();
			$first_name = $teacher->get_first_name();
			$last_name = $teacher->get_last_name();
			$email = $teacher->get_email();
			$contact_no = $teacher->get_contact_no();
			$faculty  = $teacher->get_faculty();

			$result = $stmt->execute();

			return $result;
		}

		public function delete($id){
			$this->db->connect();

			$sql = "DELETE FROM teachers WHERE id=?";

			$stmt = $this->db->initialize($sql);

			$stmt->bind_param("i",$id);

			
			

			$stmt->execute();

		
		}
	}
?>