$(document).ready(function() {
    
	
    
	$('#askeditform').validate({
			errorClass: "my-error-class",
			rules : {
				

				dateask 		: "required",

				nameask 		: "required",

				cmpask 	        : "required",

				dptask  	    : "required",

				remarkask       : "required",
 
				titleask        : "required",
			},
			messages : {

				

				dateask 		: "Please select the Date",

				nameask 		: "Please enter the reference name",

				cmpask 	: "Please enter the company name",

				dptask  	: "Please enter the department name",

				remarkask      : "required",

				titleask       : "Please enter the title",
				

			},


			submitHandler: function(form) {

			 		try
			 		{
			 			var date = document.getElementById('dateask').value;
			 			var title = document.getElementById('titleask').value;
			 			var name = document.getElementById('nameask').value;
			 			
			 			var remark = document.getElementById('remarkask').value;
			 		    var department = document.getElementById('dptask').value;
			 		    var company = document.getElementById('cmpask').value;


			 			data = {
							date:date,
							title:title,
							name:name,
							
							remark:remark,
							department:department,
							company:company
						}
						console.log(data);

						$.ajax({
							type: "POST",
		                    url: "References/askEdit", 
		                    data:data,
		                    dataType:"json",
		                    success:function(response)
		                    {
		                    	if(response.success == true)
								{
									alert('Edited');
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




	$('#giveditform').validate({
			errorClass: "my-error-class",
			rules : {
				

				dategive 		: "required",

				namegive 		: "required",

				cmpgive 	: "required",

				dptgive  	: "required",

				remarkgive      : "required",

				titlegive       : "required",
			},
			messages : {

				

				dategive 		: "Please select the Date",

				namegive 		: "Please enter the reference name",

				cmpgive 	: "Please enter the company name",

				dptgive  	: "Please enter the department name",

				remarkgive      : "required",

				titlegive       : "Please enter the title",
				

			},


			submitHandler: function(form) {

			 		try
			 		{
			 			var date = document.getElementById('dategive').value;
			 			var title = document.getElementById('titlegive').value;
			 			var name = document.getElementById('namegive').value;
			 			
			 			var remark = document.getElementById('remarkgive').value;
			 		    var department = document.getElementById('dptgive').value;
			 		    var company = document.getElementById('cmpgive').value;


			 			data = {
							date:date,
							title:title,
							name:name,
							
							remark:remark,
							department:department,
							company:company
						}
						console.log(data);

						$.ajax({
							type: "POST",
		                    url: "References/giveEdit", 
		                    data:data,
		                    dataType:"json",
		                    success:function(response)
		                    {
		                    	if(response.success == true)
								{
									alert('Edited');
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