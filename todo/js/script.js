$(document).ready(function(){

	$.ajax({
	 	url: "ajax.php?action=get"
	}).done(function(data) {
		//console.log(data);
	 $('#listItemId').html(data);
	 deleteIt ();
	});
	
	
	
	$('#formItem').submit(function(){
		var data= $(this).serialize();
		console.log(data);
		
		$.ajax({
		 	url: "ajax.php?action=create",
		 	type: 'post',
		 	data: data
		}).done(function(data) {			
		 $('#listItemId').html(data);
		 $('#item_value').val('');
		 deleteIt ();
		});
		return false;		
	});
	
	function deleteIt(){
	
	$('.delete').on('click',function(){
		
		var url = $(this).attr('href');
		
		$.ajax({
		 	url: url
		}).done(function(data) {			
		 $('#listItemId').html(data);
		 deleteIt ();
		});
		return false;
	
	});
	}
	
});
