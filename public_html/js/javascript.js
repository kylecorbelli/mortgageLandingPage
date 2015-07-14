$(function() {

// Loads the first page of inputs
$('#mainInputContainer').load('data/firstQuestions.html', function() {
    setEventListeners();
    fillSessionVariables();
});

function setEventListeners() {
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

    // Sets up buttons to load next set of inputs and update the history stack
    $('button').on('click', function() {
        var href = $(this).attr('data-href');
        loadContent(href);
    });    
}

// Sets event listeners on initial page load
setEventListeners();

// Function for AJAX calls
function loadContent(url) {
    $('#mainInputContainer').load(url, function() {
        setEventListeners();
        fillSessionVariables();
        $(window).scrollTop(0);
    });
}


// Autopopulate fields from session storage
function fillSessionVariables() {
    for(i = 0; i < sessionStorage.length; i++) {
        var id = sessionStorage.key(i);
        $('#' + id).val(sessionStorage.getItem(id));
    }
}

fillSessionVariables();

});
