<?php 
class User_info extends CI_Model{
	function validate(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));
		$query = $this->db->get('user_info');

		 if($query->num_rows() == 1){

		 	return $query;
		 	}
	}
	function create_user(){
		$new_user=array('first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'username'  => $this->input->post('username'),
			'password'  => md5($this->input->post('password')),
			'email'  => $this->input->post('email')
			);
		$insert = $this->db->insert('user_info',$new_user);
	}
}
 ?>