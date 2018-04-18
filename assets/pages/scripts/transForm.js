$(document).ready(function() {
    
	// $( ".date" ).datepicker({
 //          dateFormat: "yy-mm-dd"
 //        });
    
	$('#transForm').validate({
			errorClass: "my-error-class",
			rules : {
				types 		: "required",

				date 		: "required",

				name 		: "required",

				cmpname 	: "required",

				dptname  	: "required",

				remark      : "required",

				title       : "required",
			},
			messages : {

				types 		: "Please select the Type",

				date 		: "Please select the Date",

				name 		: "Please enter the reference name",

				cmpname 	: "Please enter the company name",

				dptname  	: "Please enter the department name",

				remark      : "required",

				title       : "Please enter the title",
				

			},


			submitHandler: function(form) {

			 		try
			 		{
			 			var date = document.getElementById('date').value;
			 			var title = document.getElementById('title').value;
			 			var name = document.getElementById('name').value;
			 			var type = $('#types').val();
			 			var remark = document.getElementById('remark').value;
			 		    var department = document.getElementById('dptname').value;
			 		    var company = document.getElementById('cmpname').value;


			 			data = {
							date:date,
							title:title,
							name:name,
							type:type,
							remark:remark,
							department:department,
							company:company
						}
						console.log(data);

						$.ajax({
							type: "POST",
		                    url: "References/transadd", 
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