<?php 
class question extends CI_Model{
	//for inserting question into database
	function submit_question($id){
			$new_ques=array('u_id' => $id,
				'ques' => $this->input->post('question'),
				'ans_given'=>'false',
				'field'=>$this->input->post('subjects')
				);
			$insert = $this->db->insert('questions',$new_ques);
		} 
		//for retreiving questions from database
	function show_ques(){
		$query =$this->db->query("select * from questions order by q_id desc");
		
		if($query->num_rows()>0){
			foreach($query->result() as $row){
				$data[]=$row;
			}
			return $data;
		}
	}
	function unanswered_question(){
		$query =$this->db->query("select * from questions where ans_given='false'");
		
		if($query->num_rows()>0){
			foreach($query->result() as $row){
				$data[]=$row;
			}
			return $data;
		}
	}
	
	function your_question($id){
		$query =$this->db->query("select * from questions where u_id=$id");
		
		if($query->num_rows()>0){
			foreach($query->result() as $row){
				$data[]=$row;
			}
			return $data;
		}
	}
	function get_specific_questions($field){
		$query =$this->db->query("select * from questions where field='$field'");
		if($query->num_rows()>0){
			foreach($query->result() as $row){
				$data[]=$row;
			}
			return $data;
		}

	}
	
	function delete_question($q_id){
		$query =$this->db->query("delete from questions where q_id=$q_id");
		
	}

}
?>