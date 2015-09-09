<?php 
class Site extends CI_Controller{
	// function __construct{
	// 	parent::CI_Controller();
	// 	$this->is_logged_in();
	// }
	//login redirect to this function i.e home page 
	function members_area(){
	$this->is_logged_in();
	$data['records']=$this->show_ques();
	$data['answers']=$this->show_answer();
	$sess_data=$this->session->userdata('user');
	$id=$sess_data['id'];
	$data['user_id']=$id;
	$data['main_content'] = 'members_area';
	$this->load->view('includes/template',$data);

	}
	//for asking any question
	function submit_question(){
		$sess_data=$this->session->userdata('user');
		$id=$sess_data['id'];
		$this->load->model('question');
		$query = $this->question->submit_question($id);
		echo "<script>
			window.location.href='members_area';
			alert('your question is posted');
			</script>";
		
	}
	//session to check whether logged in or not
	function is_logged_in(){
		$sess_data = $this->session->userdata('user');
		$is_logged_in = $sess_data['is_logged_in'];
		if(!isset($is_logged_in) || $is_logged_in != true){
			echo "you don`t have permissions to access this page
			<a href='../login'>login</a>";
			die();
		}
	}
	function your_questions(){
		$data['records']=$this->get_all_your_question();
		$data['answers']=$this->show_answer();
		$sess_data=$this->session->userdata('user');
		$id=$sess_data['id'];
		$data['user_id']=$id;
		$data['main_content'] = 'your_questions';
		$this->load->view('includes/template',$data);
	}
	function your_answers(){
		$data['records']=$this->get_your_answer();
		$sess_data=$this->session->userdata('user');
		$id=$sess_data['id'];
		$data['user_id']=$id;
		$data['main_content'] = 'your_answers';
		$this->load->view('includes/template',$data);

	}
	function specific_field(){
		$field=$this->input->post('subject');
		$data = $this->session->userdata('user'); 
		$data['field']=$field;
		$this->session->set_userdata('user',$data);
		$data['records']=$this->get_specific_questions();
		$data['answers']=$this->show_answer();
		$sess_data=$this->session->userdata('user');
		$id=$sess_data['id'];
		$data['user_id']=$id;
		$data['main_content'] = 'specific_questions';
		$this->load->view('includes/template',$data);

	}
	//showing questions to user
	function show_ques(){
		$this->load->model('question');
		$query = $this->question->show_ques();
		return $query;
	}
	//showing answers
	function show_answer(){
		$this->load->model('answer_model');
		$query = $this->answer_model->show_answer();
		return $query;
	}
	function unanswered_question(){
		$data['records']=$this->get_all_unanswered_question();
		$sess_data=$this->session->userdata('user');
		$id=$sess_data['id'];
		$data['user_id']=$id;
		$data['main_content'] = 'unanswered_question';
		$this->load->view('includes/template',$data);
	}
	function get_all_unanswered_question(){
		$this->load->model('question');
		$query = $this->question->unanswered_question();
		return $query;
	}
	function get_all_your_question(){
		$sess_data=$this->session->userdata('user');
		$id=$sess_data['id'];
		$data['user_id']=$id;
		$this->load->model('question');
		$query = $this->question->your_question($id);
		return $query;
	}
	function get_your_answer(){
		$sess_data=$this->session->userdata('user');
		$id=$sess_data['id'];
		$this->load->model('answer_model');
		$query = $this->answer_model->get_your_answer($id);
		return $query;
	}
	function get_specific_questions(){
		$sess_data=$this->session->userdata('user');
		$field=$sess_data['field'];
		$this->load->model('question');
		$query = $this->question->get_specific_questions($field);
		return $query;
	}
	function delete_question(){
		$q_id=$_GET['q_id'];
		$this->load->model('question');
		$query = $this->question->delete_question($q_id);
		echo "<script>
			window.location.href='http://localhost/quans/index.php/site/your_questions';
			alert('your question is deleted!!');
			</script>";
		
	}
	
} 
?>