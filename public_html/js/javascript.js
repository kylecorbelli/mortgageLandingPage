$(function() {

// Loads the first page of inputs
$('#mainInputContainer').load('data/firstQuestions.html', function() {
    setEventListeners();
    fillSessionVariables();
});

function setEventListeners() {
    
    // Sets variables to avoid excessive jQuery calls

    var namePattern = /^[a-zA-Z]+$/;
    var emailPattern = /^[\w\.\-]+@[\w\.\-]+\.\w{2,6}$/;
    var zipPattern = /^\d{5}$/;
    var phonePattern = /^\d{10}$/;

    var $mortgageGoal = $('#Mortgage-Goal');
    var $loanBalance = $('#Loan-Balance');
    var $cashOut = $('#Cash-Out');
    var $propertyValue = $('#Property-Value');
    var $credit = $('#Credit');
    var $vaEligible = $('#VA-Eligible');
    var $firstName = $('#First-Name');
    var $lastName = $('#Last-Name');
    var $zipCode = $('#Zip-Code');
    var $email = $('#Email');
    var $phone = $('#Phone');
    
    
    // Adds or removes error styling when the user has focused on and then skipped a required input
    $('.namePattern').on('blur', function() {
        var $this = $(this);
        if($this.val() && namePattern.test($this.val())) {
            $this.parent().parent().removeClass('has-error');
            $this.parent().next().hide();
        } else {
            $this.parent().parent().addClass('has-error');
        }  
    });
    
    $('.zipPattern').on('blur', function() {
        var $this = $(this);
        if($this.val() && zipPattern.test($this.val())) {
            $this.parent().parent().removeClass('has-error');
            $this.parent().next().hide();
        } else {
            $this.parent().parent().addClass('has-error');
        }  
    });
    
    $('.emailPattern').on('blur', function() {
        var $this = $(this);
        if($this.val() && emailPattern.test($this.val())) {
            $this.parent().parent().removeClass('has-error');
            $this.parent().next().hide();
        } else {
            $this.parent().parent().addClass('has-error');
        }  
    });
    
    $('.phonePattern').on('blur', function() {
        var $this = $(this);
        if($this.val() && phonePattern.test($this.val())) {
            $this.parent().parent().removeClass('has-error');
            $this.parent().next().hide();
        } else {
            $this.parent().parent().addClass('has-error');
        }  
    });
    
    // Adds red error indicator if 'select' element is skipped
    $('select').on('blur', function() {
        var $this = $(this);
        if(!$this.val()) {
            $this.parent().addClass('has-error');
        }
    });
    
    
    // Clears error messages upon selecting an option
    $('select').on('change', function() {
        var $this = $(this);
        if($this.val()) {
            $this.parent().removeClass('has-error');
            $this.next().hide();
        }
    });
    
    // Sets user input to session storage 
    $('input').on('change', function() {
        var $this = $(this);
        var storageKey = $this.attr('id');
        var storageValue = $this.val();
        sessionStorage.setItem(storageKey, storageValue);
    });

    // Sets user input to session storage
    $('select').on('change', function() {
      var $this = $(this);
      var storageKey = $this.attr('id');
      var storageValue = $this.val();
      sessionStorage.setItem(storageKey, storageValue);
    }); 

    // Validates the first set of inputs before sending the user to the second set
    $('#firstNextButton').on('click', function() {
        var isPageValid = true;
        if(!$mortgageGoal.val()) {
            $mortgageGoal.parent().addClass('has-error');
            $('#goalError').show();
            isPageValid = false;
        }
        if(!$loanBalance.val()) {
            $loanBalance.parent().addClass('has-error');
            $('#balanceError').show();
            isPageValid = false;
        }
        if(!$cashOut.val()) {
            $cashOut.parent().addClass('has-error');
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
        if(!$propertyValue.val()) { // Store a variable so you don't make too many jQuery calls
            $propertyValue.parent().addClass('has-error');
            $('#propertyValueError').show();
            isPageValid = false;
        }
        if(!$credit.val()) {
            $credit.parent().addClass('has-error');
            $('#creditError').show();
            isPageValid = false;
        }
        if(!$vaEligible.val()) {
            $vaEligible.parent().addClass('has-error');
            $('#vaError').show();
            isPageValid = false;
        }
        if(isPageValid) {
            loadContent('data/thirdQuestions.html');
        }
    });
    
    // Validates the third set of input and final form submission
    $('#finalSubmit').on('submit', function(e) {
        
        var isPageValid = true;
        
        
        if(!$firstName.val() || !namePattern.test($firstName.val())) {
            $firstName.parent().parent().addClass('has-error');
            $('#firstNameError').show();
            isPageValid = false;
        }
        if(!$lastName.val() || !namePattern.test($lastName.val()) ) {
            $lastName.parent().parent().addClass('has-error');
            $('#lastNameError').show();
            isPageValid = false;
        }
        if(!$zipCode.val() || !zipPattern.test($zipCode.val())) {
            $zipCode.parent().parent().addClass('has-error');
            $('#zipCodeError').show();
            isPageValid = false;
        }
        if(!$email.val() || !emailPattern.test($email.val())) {
            $email.parent().parent().addClass('has-error');
            $('#emailError').show();
            isPageValid = false;
        }
        if(!$phone.val() || !phonePattern.test($phone.val())) {
            $phone.parent().parent().addClass('has-error');
            $('#phoneError').show();
            isPageValid = false;
        }
        
        if(isPageValid === false) {
            e.preventDefault();
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
