jQuery(document).ready(function(){

	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(500,function() {
		$('#message').hide();

		$.post(action, {
			name: $('#name').val(),
			par_name: $('#par_name').val(),
			club: $('#club').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			grupa: $('#grupa  option:selected').val(),
			redo: $('#redo').val(),
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});
	
	$('#c-contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(500,function() {
		$('#message').hide();

		$.post(action, {
			c_name: $('#c_name').val(),
			c_email: $('#c_email').val(),
			c_phone: $('#c_phone').val(),
			c_target: $('#c_target').val(),
			c_topic: $('#c_topic').val(),
			c_comments: $('#c_comments').val(),
			c_redo: $('#c_redo').val(),
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#c-contactform').slideUp('slow');

			}
		);

		});

		return false;

	});
	
	$('#contactform-nab').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(500,function() {
		$('#message').hide();

		$.post(action, {
			name: $('#name').val(),
			grupa: $('#grupa  option:selected').val(),
			par_name: $('#par_name').val(),
			phone: $('#phone').val(),
			email: $('#email').val(),
			redo: $('#redo').val(),
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform-nab').slideUp('slow');

			}
		);
		});
		return false;
	});
	
	

});