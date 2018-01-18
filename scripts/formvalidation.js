
$(document).ready(function() {

  // Form validation
  $("#myform").on("submit", function() {
  var validform = true;

  /* NAME */
  var nameValid = $("#name").prop("validity").valid;
  if(nameValid) {
    $("#nameError").hide();
  }
  else {
    $('#nameError').show();
    nameValid = false;
  }

  /* EMAIL */
  var emailValid= $("#email").prop("validity").valid && $("#email").length!=0;
  if(emailValid){
    $("#emailError").hide();
  }
  else {
    $('#emailError').show();
    emailValid=false;
  }

  /* YEAR */
  var year = document.getElementById("year").value;
  var yearValid = $("#year").prop("validity").valid && year.length==4;
  if(yearValid){
    $("#yearError").hide();
  }
  else{
    $('#yearError').show();
      yearValid=false;
  }

  /* MAJOR */
  var majorValid = $("#major").prop("validity").valid;
  if(majorValid){
    $("#majorError").hide();
  }
  else{
    $('#majorError').show();
    majorValid = false;
  }

  validform = nameValid && emailValid && yearValid && majorValid;
  return validform;

  });


});
