<?php 

class login extends CI_Controller
{
	//to call default page 
	function index()
	{
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template',$data);
	}
	//logging out
	function logout(){
		$this->session->sess_destroy();
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template',$data);
	}
	//check user`s credentials
	function validate_credentials(){
		$this->load->model('user_info');
		$username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
		$query = $this->user_info->validate($username,$password);
		if($query){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true,
				'id'=>$query->id);
			$this->session->set_userdata('user',$data);
			redirect('site/members_area');

		}
		else{
			$this->index();
			echo "Username or password is incorrect";
		}
	}
	//calling sign up form
	function signup(){
		$data['main_content']='signup_form';
		$this->load->view('includes/template',$data);
	}
	//check validation and creating new users
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