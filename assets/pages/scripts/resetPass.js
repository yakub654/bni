$(document).ready(function() {

		$('#Resetpass').validate({

		errorClass: "my-error-class",
       
		rules : {
			password : {
				required : true
			
			},

			cnf_password : {
			required : true,
			equalTo: "#password"
			},

			

		},

		messages : {

			password : {
			 	required   : "Please enter a password"
			 	
			},
			cnf_password : {
			 	required   : "Confirm your password",
			 	equalTo    : "Please enter the same password as above"
			},

			
		},

		submitHandler : function(form)
		{
			try
			{
				var password    = document.getElementById('password').value;
				// var id          = document.getElementById('id').value;
				

				data = {
					password:password,
					
					
				}
				console.log(data)
				$.ajax({
						type: "POST",
	                    url: "app/Login/checkLinkTime", 
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