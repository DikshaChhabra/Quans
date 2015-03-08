<h1>create an account</h1>
<?php 
	echo form_open('login/create_users','class="form-horizontal col-md-4"');
	echo form_input(array('name'=>'first_name',
					'placeholder'=>'First Name',
					'class'=>'form-control'
					 ));
	echo form_input(array('name'=>'last_name',
					'placeholder'=>'Last Name',
					'class'=>'form-control'
					));
	echo form_input(array('name'=>'email',
					'placeholder'=>'Email Address',
					'class'=>'form-control'
					));
	echo form_input(array('name'=>'username',
					'placeholder'=>'UserName',
					'class'=>'form-control'
					));
	echo form_password(array('name'=>'password',
					'placeholder'=>'Password',
					'class'=>'form-control'
					));
	echo form_password(array('name'=>'password2',
					'placeholder'=>'Confirm Password',
					'class'=>'form-control'
					));

	echo form_submit('submit','Create account','class="btn"');
	echo form_close();
 	?>
 	<?php echo validation_errors('<p class="error"></p>') ?>