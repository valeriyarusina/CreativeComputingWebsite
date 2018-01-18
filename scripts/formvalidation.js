
$(document).ready(function() {

  // Form validation
  $("#myform").on("submit", function() {
  var validform=true;



  var nameValid= $("#name").length!=0;
  if(nameValid){$("#nameError").hide();}

    else {
      $('#nameError').show();
      validform=false;
    }

    var emailValid= $("#email").prop("validity").valid && $("#email").length!=0;
    if(emailValid){ $("#emailError").hide();}

      else {
        $('#emailError').show();
        validform=false;
      }

    var yearValid=$("#year").length==4;
    if(yearValid){ $("#yearError").hide(); }
    else{
      $('#emailError').show();
      validform=false;
    }
    var majorValid=$("#year").length!=0;
    if(yearValid){ $("#majorError").hide(); }
    else{
      $('#majorError').show();
      validform=false;
    }

      return validform;
    });


});
