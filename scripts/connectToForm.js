/* code from: https://medium.com/@dmccoy/how-to-submit-an-html-form-to-google-sheets-without-google-forms-b833952cc175 */
var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/u/2/s/AKfycby-xul-6CjuwlbObCshf3uMqG2NaOmIhih2m8415i1FnQK_BxMg/exec'

$('#submit').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})
