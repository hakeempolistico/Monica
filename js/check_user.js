// JavaScript Document

$('#username').keyup(function()
{
	var username = $('#username').val();
	$('#status').html('<img src="username_loader.gif">');

	if (username!='')
	{
		$.post('check_user.php',{username:username},

		function(data)
		{
			$('#status').html(data);
		});
	}
	else
	{
			$('#status').html('');
	}
});