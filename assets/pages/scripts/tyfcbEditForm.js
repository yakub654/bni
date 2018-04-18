$(document).ready(function() {
  // $( ".date" ).datepicker({
  //          dateFormat: "yy-mm-dd"
  //        });

  $("#tyfcbEdit").validate({
    errorClass: "my-error-class",
    rules: {
      user: "required",

      date: "required",

      amount: "required",

      remark: "required"
    },
    messages: {
      user: "Please select the user name",

      date: "Please select the date",

      amount: "Please Enter the amount",

      remark: "Please Enter the remark"
    },

    submitHandler: function(form) {
      try {
        var date = document.getElementById("datedit").value;
        // var date = $('.date-picker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
        var Amount = document.getElementById("amtedit").value;
        var user = document.getElementById("user").value;
        var remark = document.getElementById("rmkedit").value;
        var id = document.getElementById("id").value;

        data = {
          date: date,
          Amount: Amount,
          user: user,
          remark: remark,
          id: id
        };
        console.log(data);

        $.ajax({
          type: "POST",
          url: "Tyfcb/tyfedit",
          data: data,
          dataType: "json",
          success: function(response) {
            if (response.success == true) {
              alert("edited");
              window.location.href = response.linkn;
            } else {
              // if(response.message == '1')
              // {
              // 	alert('something went wrong');
              // }
              // else
              // {
              // 	alert('form validatio failed');
              // }
              alert("Something Went wrong");
            }
          }
        });
      } catch (e) {
        console.log(e);
      }
    }
  });
});
