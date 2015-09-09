
<div id="top_border">
	<form action="http://localhost/quans/index.php/site/specific_field" class="form-horizontal col-md-3" method="post">
	<select name="subject" class="form-control placeholder" id="search_input">
		<option value="">search here</option>
    	<option value="physics" id="search_dropdown">physics</option>
		<option value="chemistry" id="search_dropdown">chemistry</option>
		<option value="biology" id="search_dropdown">biology</option>
		<option value="business" id="search_dropdown">business</option>
		<option value="accounts" id="search_dropdown">accounts</option>
		<option value="english" id="search_dropdown">english</option>
		<option value="maths" id="search_dropdown">maths</option>
	</select>
    <button type="submit" name="submit" class="btn" id="submit_search">
      <i id="search" class="fa fa-search"></i>
    </button>
	</form>
</div>
	<header id="header_membersArea">
		<div id="logo">Quans</div>
			<div id="nav_list">
			<ul class="nav nav-tabs">
				<li class="nav_li"><a href="http://localhost/quans/index.php/site/members_area" class="nav_li_a">Home</a></li>
				<li class="nav_li"><a href="http://localhost/quans/index.php/site/unanswered_question" class="nav_li_a">Questions</a></li>
				<li class="nav_li dropdown"><a href="#" aria-controls="profile" data-toggle="tab" class="nav_li_a dropdown-toggle">Profile</a>
					<ul class="dropdown-menu" id="dropdown_list">
						<li>
							<a href="http://localhost/quans/index.php/site/your_questions" class="nav_li_a">Your Questions</a>
							<a href="http://localhost/quans/index.php/site/your_answers" class="nav_li_a">Your Answers</a>
						</li>
					</ul>
				</li>
				<li class="nav_li" ><a href="http://localhost/quans/index.php/login/logout" class="nav_li_a">Logout</a></li>
			</ul>
			</div>
	</header>
<div id="answer_body">
	<div id="left_answer_body">
	    <h2>Welcome To Quans </h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, dicta! Ut sed quidem dolore deleniti obcaecati culpa deserunt, quod non dolorum recusandae assumenda, quaerat voluptatum odio molestias esse? Minima, velit.</p>
	</div>
	<div id="right_answer_body"> 
		<img  id="answer_image" src="../../img/chrome.png">
		<div id="textarea_askQuestion">
			<i id="pencil" class="fa fa-pencil"></i>
				<?php 
				// form to ask question
				echo form_open('site/submit_question','class="form-horizontal col-md-3"');
				echo '<select name="subjects" class="form-control field_selector" required="required">
				<option value="">select field</option>
				<option value="physics">physics</option>
				<option value="chemistry">chemistry</option>
				<option value="biology">biology</option>
				<option value="business">business</option>
				<option value="accounts">accounts</option>
				<option value="english">english</option>
				<option value="maths">maths</option>
				</select>';
				echo form_textarea(array('name'=>'question',
										'placeholder'=>'Ask any question and you be sure you find your answer?',
										'class'=>'form-control',
										'id'=>'textarea_askQuestion_textbox',
										'required'=>'required'
										 )); ?>
			<div id="textArea_button">
					<?php echo form_submit('submit','Ask Now','class="btn btn-primary textArea_submit"'); ?>
							
		    </div>
			       
		</div>
	</div>
</div>


<div id="qans_blockStart">	
		<div id="qans_blockHeader">
			<h2>Recent Asked </h2>
		</div>	


	<?php 
//displaying all questions
	    foreach ($records as $row) :?>
			<div class="well container questBlock"><b><?= $row->ques;?>?</b><br>
				<?php foreach ($answers as $ans) :?>
					<?php 
						//setting session again
						$data = $this->session->userdata('user'); 
						$data['ans_u_id']=$ans->u_id;
						$data['ans_q_id']=$ans->q_id;
						$this->session->set_userdata('user',$data);
					?>
				<?php if ($row->q_id==$ans->q_id && $user_id==$ans->u_id) 
						{
						echo '<ul>
							<li>'.$ans->answer.'<br></li>
						
						</ul>';
						
						echo anchor('answer/update_view_answer?q_id='.$row->q_id.' & ans='.$ans->answer.'&ans_id='.$ans->ans_id.'','Update','class="btn btn-primary updown"');
					}
					elseif ($row->q_id==$ans->q_id && $user_id!=$ans->u_id) {
						echo '<ul>
							<li>'.$ans->answer.'<br></li>
						
						</ul>';
					}
					else{
						$once=true;
					}
			
			        ?>
				<?php endforeach; ?>
				<?php if($once){
					$sess_data=$this->session->userdata('user');
					$ans_u_id=$sess_data['ans_u_id'];
					$ans_q_id=$sess_data['ans_q_id'];
					echo anchor('answer/give_answer?q_id='.$row->q_id.'&user_id='.$user_id.'','Answer','class="btn btn-primary"','data-toggle="modal"','data-target="#myModal"');
					} ?>
			
			</div>

	<?php endforeach; ?>
		
