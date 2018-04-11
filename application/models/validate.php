<?php
	class Validate extends CI_Model{
		public function validate_user($username, $password){
			$q = $this->db->where(['uname'=>$username,'pwd'=>$password])
					 ->get('users');
			if($q->num_rows() == 1){
				$result = $q->result();
				return $result;
			}else{
				return FALSE;
			}
		}
	}
?>