<div class="form-group">
	<p>Login Form</p>
	<?php 
	echo form_open('login/validate_credentials','class="form-horizontal col-md-3"');
	echo form_input(array('name'=>'username',
					'placeholder'=>'UserName',
					'class'=>'form-control'
					 ));
	echo form_password(array('name'=>'passsword',
					'placeholder'=>'Password',
					'class'=>'form-control'
					 ));
	echo form_submit('submit','Login','class="btn"');
	echo anchor('login/signup','Sign Up','class="btn"'); ?>
</div>