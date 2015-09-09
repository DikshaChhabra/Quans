<header>
	<div id="logo">Quans</div>
</header>
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo base_url();?>img/penn5.jpg')"></div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo base_url();?>img/penn6.jpg')"></div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo base_url();?>img/penn7.jpg');"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</div>


	<div class="modal show" id="myModal" class="modal fade">
	  <div class="modal-dialog" id="signup_modal_dialog">
			    <div class="modal-content">
			      <div class="modal-header">       

			    <h4 class="modal-title" id="form_title_signup">REGISTRATION FORM</h4>
			     </div>
			     <div class="modal-body">
			     <div class="form_body">
			        <div class="col-md-4 col-md-offset-4">
				      <div class="form-group">
				      <?php
	                    //login form 
								echo form_open('login/create_users','class="form-horizontal "'); ?>
								</div>
								</div>
						<div class="col-md-4 col-md-offset-4">
								<div class="form-group">
									<?php echo form_input(array('name'=>'first_name',
						'placeholder'=>'First Name',
						'class'=>'form-control',
						'required'=>'required',
						'pattern'=>'[A-Za-z]+',
						'title'=>'only alphabets'
						 )); ?>
						</div>
						</div>
						<div class="col-md-4 col-md-offset-4">
								<div class="form-group">
									<?php echo form_input(array('name'=>'last_name',
						'placeholder'=>'Last Name',
						'class'=>'form-control',
						'required'=>'required',
						'pattern'=>'[A-Za-z]+',
						'title'=>'only alphabets'
						 )); ?>		
						</div>
						</div>
	                    <div class="col-md-4 col-md-offset-4">
								<div class="form-group">
									<?php echo '<input type="email" name="email" value="" placeholder="Email Address" class="form-control" required="required"  />';					 ?>
								
						</div>
						</div>
						<div class="col-md-4 col-md-offset-4">
								<div class="form-group">
									<?php echo form_input(array('name'=>'username',
						'placeholder'=>'UserName',
						'class'=>'form-control',
						'required'=>'required',
						'pattern'=>'[A-Za-z0-9]+',
						'title'=>'No special characters allowed'
						 )); ?>
								
						</div>
						</div>
						<div class="col-md-4 col-md-offset-4">
							<div class="form-group">
									<?php echo form_password(array('name'=>'password',
												'placeholder'=>'Password',
												'class'=>'form-control',
												'required'=>'required'
												 )); ?>
							</div>
						</div>
	                   <div class="col-md-4 col-md-offset-4">
							<div class="form-group">
									<?php echo form_password(array('name'=>'password2',
												'placeholder'=>'Password',
												'class'=>'form-control',
												'required'=>'required'
												 )); ?>
							</div>
						</div>
								
						</div>
							</div>	

					  <div class="modal-footer" id="footer_modal">
					    
					    <div class="col-md-4 col-md-offset-4" id="submit_button_signup">
								<div class="form-group">
									<?php echo form_submit('submit','Create account','class="btn btn-primary"'); 
									echo form_close(); ?>
								</div>
						</div>
					  </div>
			  </div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	<div id="box">
		<div id="box_logo">WelCome To  Quans </div>
		<div id="box_content"><ul><li>Ask any Question </li><li>Can Answer any question</li><li>Like or Dislike ANY ANSWER</li><li>Solve Your Problem</li>
		</div>
	</div>

	<footer id="signup_footer">
	<div id="footer_note">Already have an account? 
	 <?php
	                     echo anchor('login/index','Login','class="btn btn-primary"'); ?>
	                     </div>
	

<?php 
	 	//for validation errors
	 	echo validation_errors('<p class="error alert alert-danger passwrd_cnfrm">') ;?>
	 	
	 	</footer>	 	
