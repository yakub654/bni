$(document).ready(function() {


	$('#refAddForm').validate({
		errorClass: "my-error-class",
		rules : {
			
			users : "required",

			refname : "required",

			date : "required",

			email : {
				required : true,
				email    : true
			},

			mobile : {
				required : true,
				digits : true,
				minlength : 10
			},

			
		},

		messages : {

			users : "Please select the user",

			date : "Please select the date",

			refname : "Please enter the Reference Name" ,

			email : {

				required   : "Please enter the email",
				email      : "Please enter the valid email"
			},

			mobile : {

				required   : "PLease enter the Mobile no",
				minlength  : "Please enter valid mobile number"
			},

		},



		submitHandler: function(form) {

			 		try
			 		{
			 			var date            = document.getElementById('date').value;
			 			var email           = document.getElementById('email').value;
			 			var mobile          = document.getElementById('mobile').value;
			 			var user            = $('#users').val();
			 			var remark          = document.getElementById('remark').value;
			 			var refname			= document.getElementById('refname').value;

			 			data = {
							date:date,
							email:email,
							user:user,
							remark:remark,
							mobile:mobile,
							refname:refname
						}
						console.log(data);

						$.ajax({
							type: "POST",
		                    url: "References/refAdd", 
		                    data:data,
		                    dataType:"json",
		                    success:function(response)
		                    {
		                    	if(response.success == true)
								{
									alert('Reference Added');
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
									alert(response.message);
								}
		                    }
						});
			 		}catch(e)
			 		{
			 			console.log(e);
			 		}	
			}

	});

	$('#refEditForm').validate({
		errorClass: "my-error-class",

		rules : {
			refnamedit : "required",

			datedit : "required",

			emailedit : {
				required : true,
				email    : true
			},

			mobiledit : {
				required : true,
				digits : true,
				minlength : 10
			},
			
		},

		messages : {

			refnamedit : "Please enter the Reference name",

			datedit : "Please select the date",

			

			emailedit : {

				required   : "Please enter the email",
				email      : "Please enter the valid email"
			},

			mobiledit : {

				required   : "PLease enter the Mobile no",
				minlength  : "Please enter valid mobile number"
			},

		},

		submitHandler:function(form)
		{
			try
		 		{
		 			var date            = document.getElementById('datedit').value;
		 			var email           = document.getElementById('emailedit').value;
		 			var mobile          = document.getElementById('mobiledit').value;
		 			var user            = $('#usersedit').val();
		 			var remark          = document.getElementById('remarkedit').value;
		 			var refname			= document.getElementById('refnamedit').value;
		 			var id              = document.getElementById('id').value;

		 			data = 
		 			{
						date:date,
						email:email,
						user:user,
						remark:remark,
						mobile:mobile,
						refname:refname,
						id:id
					}
					console.log(data);

					$.ajax({
						type: "POST",
	                    url: "References/refEdit", 
	                    data:data,
	                    dataType:"json",
	                    success:function(response)
	                    {
	                    	if(response.success == true)
							{
								alert('Reference Edited');
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
								alert(response.message);
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