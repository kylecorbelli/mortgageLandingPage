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


// Sets user input to session storage 
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
    case 'checkbox':
      var storageKey = $(this).attr('name');
      if(sessionStorage.getItem(storageKey)) {
        alert('hi');
        var currentStorageValues = JSON.parse(sessionStorage.getItem(storageKey)); // Return the initialized array
        var storageValue = currentStorageValues.push($(this).val());
        alert(storageValue);
      } else {
        var storageValue = [$(this).val()];
      }
      sessionStorage.setItem(storageKey, JSON.stringify(storageValue));
      break;
    case 'radio':
      var storageKey = $(this).attr('name');
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
})

var sessMsg = '';

// Loops through all set session keys
for(var i = 0; i < sessionStorage.length; i++) {
  sessMsg += 'Key/Val ' + i + ': ' + sessionStorage.key(i) + ': ' + sessionStorage.getItem(sessionStorage.key(i)) + '. ';
}

// Loop through the key value 'refinanceReason' specifically
var refiReMsg = ''

var refiArray = sessionStorage.getItem('refinanceReason');
alert(refiArray.length);
/*
for(var i = 0; i < refiArray.length; i++) {
  refiReMsg += 'Reason ' + i ': ' + refiArray[i] + '. ';
}
*/
// alert(sessMsg);

});
