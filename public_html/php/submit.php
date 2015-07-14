<?PHP


$mortgageGoal = $_POST['Mortgage-Goal'];
$loanBalance = $_POST['Loan-Balance'];
$cashOut = $_POST['Cash-Out'];
$propertyValue = $_POST['Property-Value'];
$credit = $_POST['Credit'];
$vaEligible = $_POST['VA-Eligible'];
$firstName = $_POST['First-Name'];
$lastName = $_POST['Last-Name'];
$zipCode = $_POST['Zip-Code'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];


$to = 'kyle.corbelli@gmail.com';
$subject = 'You Have a New Lead: ' . $firstName . $lastName;
$message = '<h3>Congratulations! You have a new lead! Here are the details:</h3>';
$message .= 'Mortgage Goal: ' . $mortgageGoal . '<br />';
$message .= 'Loan Balance: ' . $loanBalance . '<br />';
$message .= 'Cash Out: ' . $cashOut . '<br />';
$message .= 'Property Value: ' . $propertyValue . '<br />';
$message .= 'Credit: ' . $credit . '<br />';
$message .= 'VA Eligible: ' . $vaEligible . '<br />';
$message .= 'First Name: ' . $firstName . '<br />';
$message .= 'Last Name: ' . $lastName . '<br />';
$message .= 'Zip Code: ' . $zipCode . '<br />';
$message .= 'Email: ' . $email . '<br />';
$message .= 'Phone: ' . $phone . '<br />';

mail($to, $subject, $message);

echo 'You should be receiving an email shortly. Well done, software engineer!';

?>
