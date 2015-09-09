$('.fetch_qid').click(function(){
	var q_id=$(this).attr('id');
	$.get( "answer.php",{ q_id: q_id});
		$(".listprice").html(q_id);
		
});