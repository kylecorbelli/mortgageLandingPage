$(function() {

// Formats the user's numerical input with commas separating the thousands while they're typing it in.
$('.numberToComma').on('keyup', function() {
  var unformattedText = this.value; // Selects the input that triggered the event listener.
  noCommaText = unformattedText.replace(/,/g, ''); // Strips out all existing commas.
  formattedText = noCommaText.replace(/\B(?=(\d{3})+(?!\d))/g, ","); // Adds commas when numerical characters are followed by exactly three consecutive numerical characters.
  this.value = formattedText; // Replaces the input field's value with the newly-formatted string.
});

// Adds error styling if the user has focused on and then skipped a required input
$('.requiredInput').on('blur', function() {
  if(!this.value) {
    $(this).parent().parent().addClass('has-error');
  } else {
    $(this).parent().parent().removeClass('has-error');
  }
})

$('input').on('change', function() {
  var inputType = $(this).attr('type');
  switch(inputType) {
    case 'number':
    case 'text':
    case 'email':
    case 'tel':
      var storageKey = $(this).attr('id');
      var storageValue = $(this).val();
      sessionStorage.setItem(storageKey, storageValue);
      break;
  }
});

$('select').on('change', function() {
  var storageKey = $(this).attr('id');
  var storageValue = $(this).val();
  sessionStorage.setItem(storageKey, storageValue);
})

});
