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
				var id          = document.getElementById('id').value;
				

				data = {
					password:password,
					id:id
					
					
				}
				console.log(data)
				$.ajax({
						type: "POST",
	                    url: base_url +"app/Login/changePassword", 
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
						alert(response.message);
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