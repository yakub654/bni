$(function() {

   // Setup form validation on the #register-form element
   $("#otp_form").validate({  

       // Specify the validation rules

       // Specify the validation error messages
       submitHandler: function(form)
       {
         
         dataString = $('#otp_form').serialize();

         $.ajax({
           type: "POST",
           url:base_url+ "otp/verifyOtp",
           data: dataString,
           dataType:"json",
           beforeSend: function(){
            $("#form_submit").html('<i class="fa fa-spinner fa-spin" style="font-size:18px"></i> Connecting');
          },

          success: function(response)
          {
           
           if(response.success==true)
           {
            window.location.href=response.linkn;
          }
          else{
            $("#form_submit").html('Verify');
            
            $('#success1').css('display','none');
            $('#msg1').css('display','block');
            $('#msg1').html(response.message);
            $("#msg1").fadeOut(15000);
            
          }
          
          
        }
      });

         
       }
     });

 });
function resendOtp(otp_mobile) 
{
  $.ajax({
   type: "POST",
   url:base_url+ "otp/resendOtp",
   data :'otp_mobile='+otp_mobile,
   dataType:"json",
   beforeSend: function(){
    $("#resend_otp").html('<i class="fa fa-spinner fa-spin" style="font-size:18px"></i> Processing');
  },

  success: function(response)
  {
   
   if(response.success==true)
   {
    $("#resend_otp").html('Resend OTP');
    $('#msg1').css('display','none');
    $('#success1').css('display','block');
    $('#success1').html(response.message);
    $("#success1").fadeOut(4000);
  }
  else{
    $("#resend_otp").html('Resend OTP');
    alert(response.message);
  }
  
  
}
});

  
  
}










