$(function() {

// Formats the user's numerical input with commas separating the thousands while they're typing it in.
$('.numberToComma').on('keyup', function() {
  var unformattedText = $(this).val(); // Selects the input that triggered the event listener.
  noCommaText = unformattedText.replace(/,/g, ''); // Strips out all existing commas.
  formattedText = noCommaText.replace(/\B(?=(\d{3})+(?!\d))/g, ","); // Adds commas when numerical characters are followed by exactly three consecutive numerical characters.
  $(this).val(formattedText).trigger('change'); // Replaces the input field's value with the newly-formatted string.
});

// Adds error styling if the user has focused on and then skipped a required input
$('.requiredInput').on('blur', function() {
  if(!this.value) {
    $(this).parent().parent().addClass('has-error');
  } else {
    $(this).parent().parent().removeClass('has-error');
  }
});

// Sets user input to session storage 
$('input').on('change', function() {
  var inputType = $(this).attr('type');
  switch(inputType) {
    case 'checkbox':
      var storageKey = $(this).attr('name');
      var storageValue = $('input[name=' + storageKey + ']:checked').map(function() {
        return this.value;
      }).get();
      sessionStorage.setItem(storageKey, JSON.stringify(storageValue));
      break;
    case 'radio':
      //var checkedKey = $(this).attr('id');
      //var checkedStatus = $(this).is(':checked');
      var storageKey = $(this).attr('name');
      //var allNotChecked = $('input[name=' + storageKey + ']:not(:checked)');
      //sessionStorage.setItem(allNotChecked.attr('id'), false);
      var storageValue = $(this).val();
      sessionStorage.setItem(storageKey, storageValue);
      break;
    default:
      var storageKey = $(this).attr('id');
      var storageValue = $(this).val();
      sessionStorage.setItem(storageKey, storageValue);
      break;
  }
});

// Sets user input to session storage
$('select').on('change', function() {
  var storageKey = $(this).attr('id');
  var storageValue = $(this).val();
  sessionStorage.setItem(storageKey, storageValue);
});

var msg = '';

// Autopopulate fields from session storage
for(i = 0; i < sessionStorage.length; i++) {
  var id = sessionStorage.key(i);
  $('#' + id).val(sessionStorage.getItem(id));
  //alert(id + ': ' + sessionStorage.getItem(id));
  //$('#' + id).prop('checked', sessionStorage.getItem(id)); // was meant to check and uncheck boxes given their state in session storage
  //msg += 'Key ' + i + ': ' + id + ', Value ' + i + ': ' + sessionStorage.getItem(id) + '. ';
}
/*
$('#VA-No').prop('checked', true);
$('#VA-Yes').prop('checked', false);
*/

//alert(msg);

});
