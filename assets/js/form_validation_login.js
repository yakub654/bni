$(function() {

   // Setup form validation on the #register-form element
   $("#login_form").validate({  

       // Specify the validation rules

       // Specify the validation error messages
       submitHandler: function(form) {
       
           dataString = $('#login_form').serialize();

           $.ajax({
             type: "POST",
             url:base_url+ "login/sendOtp",
             data: dataString,
             dataType:"html",
             beforeSend: function(){
              $("#form_submit").html('<i class="fa fa-spinner fa-spin" style="font-size:18px"></i> Connecting');
            },

              success: function(data){
               if(data)
           $("body").html(data);
           }    
            });

        
       }
     });

 });










