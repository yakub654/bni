$(function() {

   // Setup form validation on the #register-form element
   $("#profile_update").validate({  

       // Specify the validation rules

       // Specify the validation error messages
       submitHandler: function(form) 
       {



        var upload_button_value = document.getElementById('upload_button_value').value;
        if(upload_button_value!=0)
        {
          // var pgr_online_verification= document.querySelector('input[name="pgr_online_verification"]:checked').value;
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
        else
        {
          alert('Please click on upload button before submitting details to upload your attachments');

        }

        
      }
    });

 });

$(function() {

   // Setup form validation on the #register-form element
   $("#documents").validate({  

       // Specify the validation rules

       // Specify the validation error messages
       submitHandler: function(form) {

        document.getElementById('upload_button_value').value='1';
        var form_data = new FormData();
        var tpd_refrence_no =  $('#tpd_refrence_no').val(); 
        var ins = document.getElementById('files').files.length;
        var pgd_document_category = new Array();
        var documents_count = document.getElementById('documents_count').value; 
        for(i=0;i<=documents_count;i++)
        {
         pgd_document_category.push($('#pgd_document_category'+i).val());
       } 


       for (var x = 0; x < ins; x++) 
       {
        form_data.append("files[]", document.getElementById('files').files[x]);
        
      }
     
      form_data.append("pgd_document_category",pgd_document_category);

      $.ajax({
        url: base_url +"photographer/uploadDocuments",
            dataType:"json", // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            beforeSend: function(){
              $("#upload").html('<i class="fa fa-spinner fa-spin" style="font-size:18px"></i> uploading...');
            },
            success: function(response)
            {

              if(response.success==true)
              {
                $("#information").css('display','none');
                document.getElementById("documents_priview").innerHTML='';
              
                $('#upload').css('display','none');
                $("#upload").html('upload');
                var success_msg='Following documents uploaded successfully.</br>'+response.message;
                document.getElementById("img_uploaded").innerHTML=success_msg;


                        // alert(response.message);
                 // window.location.href=response.linkn;

               }
               else{
                $("#information").css('display','none');
                document.getElementById("documents_priview").innerHTML='';
                $('#upload').css('display','none');
                $("#upload").html('upload');
              
                if(response.uploaded_documents!='')
                {
                 var success_msg='Following documents uploaded successfully.</br>'+response.uploaded_documents;
                 document.getElementById("img_uploaded").innerHTML=success_msg;

                            // alert(response.message);
                          }
                          var error_msg='Following documents cannot be uploaded.Size exceed more than 5 MB</br>'+response.message;
                          document.getElementById("error_invalid_size").innerHTML=error_msg;
                // document.getElementById("login_submit").disabled = false;
                //  $('#success1').css('display','none');
                //  $('#msg1').css('display','block');
                //  $('#msg1').html(response.message);
                //  $("#msg1").fadeOut(4000);

              }
            }
          });

    }
  });

 });

function actionDocuments(pgr_online_verification)
{

 if(pgr_online_verification==1)
 {
   $('#document_div').css('display','block');
 }
 else
 {
  document.getElementById('upload_button_value').value='1';

  $('#document_div').css('display','none');
}


}












