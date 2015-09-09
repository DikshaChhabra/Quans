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
		  	<div class="modal-dialog" id="modal_dialog_login">
				<div class="modal-content">
				    <div class="modal-header">       
						<h4 class="modal-title" id="form_title">LOGIN FORM</h4>
				    </div>
				    <div class="modal-body">
				     	<div class="form_body">
				        	<div class="col-md-4 col-md-offset-4">
					      		<div class="form-group">
					      		<?php
		                    	//login form 
								echo form_open('login/validate_credentials','class="form-horizontal "');
								?>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-4">
								<div class="form-group">
									<?php echo form_input(array('name'=>'username',
													            'placeholder'=>'UserName',
													            'class'=>'form-control',
													            'required'=>'required',
													            ));
									?>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-4">
								<div class="form-group">
									<?php echo form_password(array('name'=>'password',
													               'placeholder'=>'Password',
													               'class'=>'form-control',
													               'required'=>'required'));
	                                ?>
								</div>
							</div>
		                </div>
					
					<div class="modal-footer" id="modal_footer_login">
						<div class="col-md-4 col-md-offset-4" id="submit_button">
							<div class="form-group">
								<?php echo form_submit('submit','Login','class="btn btn-primary"'); ?>
							</div>
						</div>
					</div>
				</div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		</div>
		<footer id="footer_logins">
		<div id="footer_note"> Don't have an account yet? 
			<?php
			echo anchor('login/signup','Register','class="btn btn-primary"'); ?>
		</div>
		</footer>



