<?php 

class login extends CI_Controller
{
	
	function index()
	{
		echo "hii";
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template',$data);
	}
	function validate_credentials(){
		$this->load->model('user_info');
		$query = $this->user_info->validate();
		if($query){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true);
			$this->session->set_userdata($data);
			echo "hii";
			redirect('site/members_area');

		}
		else{
			$this->index();
		}
	}
	function signup(){
		$data['main_content']='signup_form';
		$this->load->view('includes/template',$data);
	}
	function create_users(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('password2','Password Confirmation','trim|required|matches[password]');
		$this->form_validation->set_rules('email','Email Address','trim|required|valid_email');
		if($this->form_validation->run()==FALSE){
			$this->signup();
		}
		else{
			$this->load->model('user_info');
			$query= $this->user_info->create_user();
				$data['main_content']='signup_successful';
				$this->load->view('includes/template',$data);
			
		}

	}
}
?>