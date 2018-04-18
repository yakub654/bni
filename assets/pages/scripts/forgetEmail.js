$(document).ready(function() {

		$('#fpassword').validate({

		errorClass: "my-error-class",
        validClass: "my-valid-class",
		rules : {
			emailforget : {
				
				email   : true
			}

			

		},

		messages : {

			emailforget : {
				
				email    : "please enter the valid email"
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