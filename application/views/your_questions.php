<div id="top_border"></div>
<header id="header_membersArea">
		<div id="logo">Quans</div>
			<div id="nav_list">
			<ul class="nav nav-tabs">
				<li class="nav_li"><a href="http://localhost/quans/index.php/site/members_area" class="nav_li_a">HOME</a></li>
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
<div id="qans_blockStart" class="quans_blockstart_questAnswer">	
		<div id="qans_blockHeader">
			<h2>Your Questions</h2>
		</div>	


	<?php 
//displaying all questions
	    foreach ($records as $row) :?>
			<div class="well container questBlock"><b><?= $row->ques;?>?</b>
			<?php echo anchor('site/delete_question?q_id='.$row->q_id.'','Delete', array('class'=>'btn btn-primary', 'onclick'=>"return confirm('Are you sure you want to delete this record?');")); ?><br>
				<?php foreach ($answers as $ans) :?>
					<?php 
						//setting session again
						$data = $this->session->userdata('user'); 
						$data['ans_u_id']=$ans->u_id;
						$data['ans_q_id']=$ans->q_id;
						$this->session->set_userdata('user',$data);
					?>
				<?php 
					if ($row->q_id==$ans->q_id && $user_id!=$ans->u_id) {
						echo '<ul>
							<li>'.$ans->answer.'<br></li>
						
						</ul>';
					}
					?>
					
				<?php endforeach; ?>
				
			
			</div>

	<?php endforeach; ?>