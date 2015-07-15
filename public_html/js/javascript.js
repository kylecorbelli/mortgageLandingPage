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
    
    // Adds red error indicator if 'select' element is skipped
    $('select').on('blur', function() {
        if(!$(this).val()) {
            $(this).parent().addClass('has-error');
        }
    });
    
    
    // Clears error messages upon selecting an option
    $('select').on('change', function() {
        if($(this).val()) {
            $(this).parent().removeClass('has-error');
            $(this).next().hide();
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
//    $('button').on('click', function() {
//        var href = $(this).attr('data-href');
//        loadContent(href);
//    });
    
    // Validates the first set of inputs before sending the user to the second set
    $('#firstNextButton').on('click', function() {
        var isPageValid = true;
        if(!$('#Mortgage-Goal').val()) {
            $('#Mortgage-Goal').parent().addClass('has-error');
            $('#goalError').show();
            isPageValid = false;
        }
        if(!$('#Loan-Balance').val()) {
            $('#Loan-Balance').parent().addClass('has-error');
            $('#balanceError').show();
            isPageValid = false;
        }
        if(!$('#Cash-Out').val()) {
            $('#Cash-Out').parent().addClass('has-error');
            $('#cashOutError').show();
            isPageValid = false;
        }
        if(isPageValid) {
            loadContent('data/secondQuestions.html');
        }
    });
    
    // Validates the second set of inputs before sending the user to the third set
    $('#secondNextButton').on('click', function() {
        var isPageValid = true;
        if(!$('#Property-Value').val()) { // Store a variable so you don't make too many jQuery calls
            $('#Property-Value').parent().addClass('has-error');
            $('#propertyValueError').show();
            isPageValid = false;
        }
        if(!$('#Credit').val()) {
            $('#Credit').parent().addClass('has-error');
            $('#creditError').show();
            isPageValid = false;
        }
        if(!$('#VA-Eligible').val()) {
            $('#VA-Eligible').parent().addClass('has-error');
            $('#vaError').show();
            isPageValid = false;
        }
        if(isPageValid) {
            loadContent('data/thirdQuestions.html');
        }
    });
    
    // Sets behavior for clicking the 'Back' buttons
    $('.backButton').on('click', function() {
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

// Autopopulates the session storage variable upon load
fillSessionVariables();




});
