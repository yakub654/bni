 $(function() {

    // Setup form validation on the #register-form element
    $("#registration_form").validate({  

        // Specify the validation rules

        // Specify the validation error messages
        submitHandler: function(form) {
        
            dataString = $('#registration_form').serialize();

            $.ajax({
              type: "POST",
              url:base_url+ "register/insertPhotographerData",
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
                 $("#form_submit").html('Create Account');

                if(response.error_type=="location")
                {
                       alert(response.message);
                }
                else
                {
                    $('#error').css('display','block');
               document.getElementById("error").innerHTML=response.message;
                }

                  
                   

                   }
              
              
             }
                   });

         
        }
      });

  });
 function actionOrganisation(pgr_type)
  {
    if(pgr_type!='')
    {
      if(pgr_type==1)
      {
        $('#organisation_div').css('display','block');
      }
      else
      {
        $('#organisation_div').css('display','none');
      }
    }
   
 }

 








