$(document).ready(function(){

	$("#user_add_form").validate({
		errorClass: "my-error-class",
        validClass: "my-valid-class",
		rules : {
			name : "required",

			mob_no : {
				required : true,
				digits : true,
				minlength : 10
			},

			cmp_name : "required",

			tg_line : "required",

			category : "required",

			password : {
				required : true,
				minlength : 8
			},

			website : {
				url : true
			},

			cnf_password : {
				required : true,
				equalTo: "#password"
				},

			email : {
				required : true,
				email : true,
				remote :{
					url:base_url+'app/User/isEmailPresent',
					type:"post"
				},
			},


		},
		messages: {

			name           : "Please enter the name",

			mob_no       : {

				required   : "PLease enter the Mobile no",
				minlength  : "Please enter valid mobile number"
			},

			cmp_name       : "Please enter the company name",

			tg_line        : "Please enter the tag line",

			password : {
			 	required   : "Please enter a password",
			 	minlength  : "Please enter atleast 8 characters"
			 	
			},

			website : {
				url        : "please enter proper website"
			},

			cnf_password : {
			 	required   : "Confirm your password",
			 	equalTo    : "Please enter the same password as above",
			},

			category       : "Please enter the categaory",

			email : {
				required   : "Please enter the email",
				email      : "Please enter the valid email",
				remote     : "Email already Exists"
			},
		},
		submitHandler: function(form) {
			try
			{
				var name     		  = document.getElementById("name").value;
				var mob_no     	 	  = document.getElementById("mob_no").value;
				var cmp_name   		  = document.getElementById("cmp_name").value;
				var tg_line        	  = document.getElementById("tg_line").value;
				var email     		  = document.getElementById("email").value;
				var password          = document.getElementById("password").value;
				var cnf_password      = document.getElementById("cnf_password").value;
				var category 		  = document.getElementById("category").value;
				var website			  = document.getElementById("website").value;
				var address 	      = document.getElementById("address").value;
				var repeater_data     = $('.repeater').repeaterVal();
				var mob_repeater_data = JSON.stringify(repeater_data['Mobile-Group']);
				var eml_repeater_data = JSON.stringify(repeater_data['Email-Group']);	

				console.log(repeater_data);
				console.log(base_url);
				
				 console.log($('input[name=prf_img]')[0].files[0]);
				 console.log($('input[name=logo_img]')[0].files[0]);

				var formData = new FormData();
				formData.append('prf_img', $('input[name=prf_img]')[0].files[0]);
				formData.append('logo_img', $('input[name=logo_img]')[0].files[0]);
				formData.append("name",name);
				formData.append("category",name);
				formData.append("mob_no",mob_no);
				formData.append("cmp_name",cmp_name);
				formData.append("tg_line",tg_line);
				formData.append("email",email);
				formData.append("website",website);
				formData.append("address",address);
				formData.append("password",password);
				formData.append("cnf_password",cnf_password);
				formData.append('emailAdd', eml_repeater_data);
				formData.append('mobileAdd', mob_repeater_data);

				$.ajax({

					type: "POST",
	                url: base_url+"app/User/validate_user", 
	                data : formData,
	                dataType:"json",
	                contentType: false,       // The content type used when sending data to the server.
	                cache: false,             // To unable request pages to be cached
	                processData:false,
	                success:function(response) {
	                	if(response.success == true)
	                	{
	                		alert('User Added');
	                		window.location.href=response.linkn;
	                	}
	                	else
	                	{
	                		alert(response.message);
	                	}
	                }
				})

			}catch(e){
				console.log(e);
			}
			
		}

	});
});
// $(function() {
// 	var inputFile1 = $('input[name=prf_img]'); // profile image
// 	var inputFile2 = $('input[name=logo_img]'); // logo image
	

	


// });