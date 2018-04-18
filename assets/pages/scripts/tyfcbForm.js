$(document).ready(function() {
    

	$('#tyfcbForm').validate({
			errorClass: "my-error-class",
			rules : {
				user : "required",

				date : "required",

				amount : "required",

				remark : "required",
			},
			messages : {

				 user : "Please select the user name",

				date : "Please select the date",
				
				amount : "Please Enter the amount",

				remark : "Please Enter the remark",

			},


			submitHandler: function(form) {

			 		try
			 		{
			 			var date = document.getElementById('date').value;
			 			
			 			var Amount = document.getElementById('amount').value;
			 			var user = $('#user').val();
			 			var remark = document.getElementById('remark').value;

			 			data = {
							date:date,
							Amount:Amount,
							user:user,
							remark:remark
						}

						$.ajax({
							type: "POST",
		                    url: "Tyfcb/tyfcb_add", 
		                    data:data,
		                    dataType:"json",
		                    success:function(response)
		                    {
		                    	if(response.success == true)
								{
									alert('Added');
									window.location.href = response.linkn;
									
								}
								else
								{
									// if(response.message == '1')
									// {
									// 	alert('something went wrong');
									// }
									// else
									// {
									// 	alert('form validatio failed');
									// }
									alert('Something Went wrong');
								}
		                    }
						});
			 		}catch(e)
			 		{
			 			console.log(e);
			 		}	
			}
	});
});