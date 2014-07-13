$(document).ready(function(){
	$("table tr td input").each(function(){
		var sid = $(this).val();		
		$.ajax({
			url:"./classes/getstatus.php",
			method:"POST",
			data:{sid:sid},
			success:function(data){				
				$("td#status_"+sid).text(data);
			}
		});
	});	
});