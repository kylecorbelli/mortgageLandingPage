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


echo 'Mortgage Goal: ' . $mortgageGoal . '<br />';
echo 'Loan Balance: ' . $loanBalance . '<br />';
echo 'Cash Out: ' . $cashOut . '<br />';
echo 'Property Value: ' . $propertyValue . '<br />';
echo 'Credit: ' . $credit . '<br />';
echo 'VA Eligible: ' . $vaEligible . '<br />';
echo 'First Name: ' . $firstName . '<br />';
echo 'Last Name: ' . $lastName . '<br />';
echo 'Zip Code: ' . $zipCode . '<br />';
echo 'Phone: ' . $phone . '<br />';



?>
