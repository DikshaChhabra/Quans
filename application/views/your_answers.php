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
<div id="qans_blockStart">	
		<div id="qans_blockHeader" class="quans_blockstart_questAnswer">
			<h2>your answers</h2>
		</div>	


	<?php 
//displaying all questions
	    foreach ($records as $row) :?>
			<div class="well container questBlock"><b><?= $row->ques;?></b><br>
				<?= $row->answer;?>
				<?php echo anchor('answer/update_view_answer?q_id='.$row->q_id.' & ans='.$row->answer.'&ans_id='.$row->ans_id.'','Update','class="btn btn-primary"');?>
			</div>

	<?php endforeach; ?>