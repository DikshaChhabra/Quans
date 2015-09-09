<?php 
class answer_model extends CI_Model{
	function submit_answer($id,$q_id){
			$new_ans=array('u_id' => $id,
				'q_id' => $q_id,
				'answer' => $this->input->post('answer')
				);
			$insert = $this->db->insert('answers',$new_ans);
			$this->db->where('q_id',$q_id);
			$this->db->set('ans_given','true');
			$this->db->update('questions');
		} 
		function show_answer(){
		$query=$this->db->get('answers');
		if($query->num_rows()>0){
			foreach($query->result() as $row){
				$data[]=$row;
			}
			return $data;
		}
	}
	function get_your_answer($id){
			$query =$this->db->query("select * from questions,answers where answers.u_id=$id and questions.q_id=answers.q_id");
			if($query->num_rows()>0){
			foreach($query->result() as $row){
				$data[]=$row;
			}
			return $data;
		}

	}
	function update_answer($ans_id,$updated_answer){
			$this->db->where('ans_id',$ans_id);
			$this->db->set('answer',$updated_answer);
			$this->db->update('answers');
		} 
	function double_check_give_answer($q_id,$user_id){
		$query =$this->db->query("select * from questions,answers where questions.q_id=$q_id and answers.q_id=$q_id and answers.u_id=$user_id");
		
		if($query->num_rows()==1){
			return $query->row();	
		} 
	}
	
	

}