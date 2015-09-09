<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/design.js"></script>
<script type="text/javascript">
    $('.mbutton').click(function(){
        var id=$(this).attr('data-id');
        $.get('answer_view.php',{id :id},function(data){
            $('#content').html(data);
            $('#myModal').modal('toggle');
        });
    });
    $(window).load(function(){
                $('#myModalAnswer').modal('show');
                
            });
    
    $('#myModalAnswer').modal({
        backdrop:'static',
        keyboard:false
    });
    $(document).ready(function() {
    $('#myCarousel').carousel({interval: 2000});
  });
   

</script>
</body>
</html>
