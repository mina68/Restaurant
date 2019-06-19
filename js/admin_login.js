$(document).ready(function(){
	$('.login_submit').on('click', function(event){
		event.preventDefault();
		let name = $('.name').val();
		let password = $('.password').val();
		if(name.length == 0)
		{
			$('.warn1').text('Please fill this field');
			$('.warn1').show();
		}
		else if(password.length == 0)
		{
			$('.warn2').text('Please fill this field');
			$('.warn2').show();
		}
		else
		{
			$.ajax({
				url:'api/validation/admin.php',
				type:'POST',
				data:{name:name, password:password},
				success:function(data){
					if(data == true)
						window.location = 'admin.php';
					else
						$('.warn2').text('wrong username or password').show();
				}
			})
		}
	})

	$('input').on('focus', function(){
		$('.warn').hide();
	})
})