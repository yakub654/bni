$(document).ready(function() {

		$('#fpassword').validate({

		errorClass: "my-error-class",
       
		rules : {
			emailforget : {
				
				email   : true,
				remote :{
					url:'app/Login/isEmailPresent',
					type:"post"
				},
			}

			

		},

		messages : {

			emailforget : {
				
				email    : "please enter the valid email",
				remote   : "Email not present"
			}

			
		},

		submitHandler : function(form)
		{
			try
			{
				var email    = document.getElementById('emailforget').value;
				

				data = {
					email:email
					
				}
				console.log(data)
				$.ajax({
						type: "POST",
	                    url: "app/Login/forgetPass", 
	                    data:data,
	                    dataType:"json",
				success:function(response)
				{
					if(response.success == true)
					{
						alert(response.message);
						window.location.href = response.linkn;
						
					}
					else
					{
						// if(response.message == '1')
						// {
						// 	alert('ivalid password');
						// }
						// else
						// {
						// 	alert('Not a User');
						// }
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