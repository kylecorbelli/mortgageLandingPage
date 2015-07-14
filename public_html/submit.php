
<html>
    <?PHP

        include 'include/connection.php';
        include 'include/head.php';

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

        date_default_timezone_set('America/Los_Angeles');
        $date = date('Y-m-d h:i:sa');

        $createQuery = "
            INSERT INTO `Leads`(`Mortgage Goal`, `Approximate Mortgage Balance`, `Cash Out Requested`, `Estimated Property Value`, `Credit`, `VA Eligible`, `First Name`, `Last Name`, `Zip Code`, `Email`, `Phone`, `Date Added`)
            VALUES('$mortgageGoal', '$loanBalance', '$cashOut', '$propertyValue', '$credit', '$vaEligible', '$firstName', '$lastName', '$zipCode', '$email', '$phone', '$date')
        ";

        mysql_query($createQuery) or die(mysql_error());

        $to = 'kyle.corbelli@gmail.com';
        $subject = 'You Have a New Lead: ' . $firstName . ' ' . $lastName;

        $headers = 'Content-Type: text/html';

        $message = '<h3>Congratulations! You have a new lead! Here are the details:</h3>';
        $message .= '<table>';
        $message .= '<tr><td>Mortgage Goal:</td><td>' . $mortgageGoal . '</td></tr>';
        $message .= '<tr><td>Loan Balance:</td><td>' . $loanBalance . '</td></tr>';
        $message .= '<tr><td>Cash Out:</td><td>' . $cashOut . '<br />';
        $message .= '<tr><td>Property Value:</td><td>' . $propertyValue . '</td></tr>';
        $message .= '<tr><td>Credit:</td><td>' . $credit . '<br />';
        $message .= '<tr><td>VA Eligible:</td><td>' . $vaEligible . '</td></tr>';
        $message .= '<tr><td>First Name:</td><td>' . $firstName . '</td></tr>';
        $message .= '<tr><td>Last Name:</td><td>' . $lastName . '</td></tr>';
        $message .= '<tr><td>Zip Code:</td><td>' . $zipCode . '</td></tr>';
        $message .= '<tr><td>Email:</td><td>' . $email . '</td></tr>';
        $message .= '<tr><td>Phone:</td><td>' . $phone . '</td></tr>';
        $message .= '</table>';

        mail($to, $subject, $message, $headers);

    ?>

<body>
    <div id='page-wrapper' class='container-fluid'>
        <?PHP
            include 'include/logoHeader.php'
        ?>
        <div class='row'>
            <div class='col-sm-6 col-sm-push-3'>
                <div class='well'>
                    <h1>Thank You for Contacting Ideal Home Loans!</h1>
                    <p>Congratulations! You've just taken the first step toward a new mortgage.</p>
                    <p>A dedicated Home Loan Expert will be calling you to match you with a personalized loan to meet your goals.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
