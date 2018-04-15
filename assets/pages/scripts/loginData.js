$(document).ready(function() {

	$('#Login').validate({

		errorClass: "my-error-class",
        validClass: "my-valid-class",
		rules : {
			email : {
				required : true
			},

			password : {
				required : true
			},

		},

		messages : {

			email : {
				required : "Please enter the email"
			},

			password : {
				required : "Please enter the password"
			},
		},

		submitHandler : function(form)
		{
			try
			{
				var email    = document.getElementById('email').value;
				var password = document.getElementById('password').value;
				var remember = document.querySelector('.ischecked').checked;

				data = {
					email:email,
					password:password,
					remember:remember
				}
				console.log(data)
				$.ajax({
						type: "POST",
	                    url: "app/Login/login_Users", 
	                    data:data,
	                    dataType:"json",
				success:function(response)
				{
					if(response.success == true)
					{
						window.location.href = response.linkn;
						
					}
					else
					{
						if(response.message == '1')
						{
							alert('ivalid password');
						}
						else
						{
							alert('Not a User');
						}
					}
				}
				});
			}
			catch(e)
			{
				console.log(e);
			}
		}

	});

});