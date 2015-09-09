<div id="answer_background">
<!-- Modal -->
            <div class="modal fade" id="myModalAnswer" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Give Your Answer</h4>
                        </div>
                        <!-- Body -->
                            <div class="modal-body">
                                <div id="content">
                                 <?php 
									//answer form
									echo form_open('answer/submit_answer','class="form-horizontal col-md-3"');
									echo form_textarea(array('name'=>'answer',
													'placeholder'=>'Your Answer',
													'class'=>'form-control listprice','required'
													 ));
									 ?>
	                            </div>		 
                            </div>
                          <!-- Footer -->
                            <div class="modal-footer" id="modal_footer_answer">
                             <?php echo anchor('site/members_area','Close','class="btn btn-default"'); ?>
                                <?php
                                echo form_submit('submit','Submit','class="btn btn-primary answer_submitBtn"'); ?>
                            </div>
                 	</div>
                </div>
            </div>
</div>






	