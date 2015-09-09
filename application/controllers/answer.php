<?php 

class answer extends CI_Controller
{
	function give_answer(){
		
		$q_id=$_GET['q_id'];
		$user_id=$_GET['user_id'];
		$this->load->model('answer_model');
		$query=$this->answer_model->double_check_give_answer($q_id,$user_id);
		if($query){
			$data['main_content'] = 'no_answer';
			$this->load->view('includes/template',$data);
		}
		else{
		$data['main_content'] = 'answer_view';
		$this->load->view('includes/template',$data);
		if(isset($_GET['q_id'])){
		$data = $this->session->userdata('user'); 
		$data['q_id']=$_GET['q_id'];
		$this->session->set_userdata('user',$data);
	}
	}

	}
	function submit_answer(){
		$sess_data=$this->session->userdata('user');
		$id=$sess_data['id'];
		$q_id=$sess_data['q_id'];
		$this->input->post('answer');
		$this->load->model('answer_model');
		$query = $this->answer_model->submit_answer($id,$q_id);
		echo "<script>
			window.location.href='http://localhost/quans/index.php/site/members_area';
			alert('your answer is posted');
			</script>";
		
	}
	function update_view_answer(){
		
		if(isset($_GET['q_id'])){
		$data = $this->session->userdata('user'); 
		$data['q_update_id']=$_GET['q_id'];
		$data['ans']=$_GET['ans'];
		$data['ans_id']=$_GET['ans_id'];
		$this->session->set_userdata('user',$data);
		$data['main_content'] = 'update_view_answer';
		$this->load->view('includes/template',$data);
	}
		
	}
	function update_answer(){
		$sess_data=$this->session->userdata('user');
		$ans_id=$sess_data['ans_id'];
		$updated_answer=$this->input->post('update_answer');
		$this->load->model('answer_model');
		$query = $this->answer_model->update_answer($ans_id,$updated_answer);
		echo "<script>
			window.location.href='http://localhost/quans/index.php/site/members_area';
			alert('your answer is updated');
			</script>";
		
	}
	
	
	
}
?>