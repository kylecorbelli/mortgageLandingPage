$(function() {

// Loads the first page of inputs
$('#mainInputContainer').load('data/firstQuestions.html', function() {
    setEventListeners();
    fillSessionVariables();
});

// Adds error styling if the user has focused on and then skipped a required input
$('.requiredInput').on('blur', function() {
  if(!this.value) {
    $(this).parent().parent().addClass('has-error');
  } else {
    $(this).parent().parent().removeClass('has-error');
  }
});

function setEventListeners() {
    // Sets user input to session storage 
    $('input').on('change', function() {
        var storageKey = $(this).attr('id');
        var storageValue = $(this).val();
        sessionStorage.setItem(storageKey, storageValue);
    });

    // Sets user input to session storage
    $('select').on('change', function() {
      var storageKey = $(this).attr('id');
      var storageValue = $(this).val();
      sessionStorage.setItem(storageKey, storageValue);
    }); 
}

setEventListeners();

// Autopopulate fields from session storage
function fillSessionVariables() {
    for(i = 0; i < sessionStorage.length; i++) {
        var id = sessionStorage.key(i);
        $('#' + id).val(sessionStorage.getItem(id));
    }
}

fillSessionVariables();

});
