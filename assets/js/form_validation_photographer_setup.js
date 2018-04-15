$(function() {

   // Setup form validation on the #register-form element
   $("#profile_setup").validate({  

       // Specify the validation rules

       // Specify the validation error messages
       submitHandler: function(form) 
       {

 var pgr_online_verification= document.querySelector('input[name="pgr_online_verification"]:checked').value;
          var pgr_online_verification =$('input:radio[name=pgr_online_verification]:checked').val();

         

          var formData = new FormData();
          formData.append('file', $('input[type=file]')[0].files[0]);
          formData.append("psn_gst", $('#psn_gst').val());
          formData.append("psn_gst", $('#psn_gst').val());
          formData.append("old_img", $('#old_img').val());
          formData.append("pgr_address", $('#pgr_address').val());
          formData.append("tpd_refrence_no", $('#tpd_refrence_no').val());
          formData.append("pgr_online_verification",pgr_online_verification );
          $.ajax({
           type: "POST",
            url: base_url+ "photographer/updateProfile",
           data : formData,
           dataType:"json",
          contentType: false,       // The content type used when sending data to the server.
          cache: false,             // To unable request pages to be cached
          processData:false,
          beforeSend: function(){
           $("#form_submit").html('<i class="fa fa-spinner fa-spin" style="font-size:18px"></i> submitting...');
         },

         success: function(response)
         {
          if(response.success==true)
          {

           alert(response.message);
           window.location.href=response.linkn;

         }
         else{
           $("#form_submit").html('Submit');
           alert(response.message);

       //  $('#error').css('display','block');
       // document.getElementById("error").innerHTML=response.message;

     }

   }
 });

       

        
      }
    });

 });












