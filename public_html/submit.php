<!DOCTYPE html>
<html>
    <?PHP

        include 'include/connection.php';
        include 'include/head.php';
        
        // Validate the inputs in case user has JavaScript disabled
        if(!empty($_POST['Mortgage-Goal'])) {
            $mortgageGoal = $_POST['Mortgage-Goal'];
        } else {
            $mortgageGoal = NULL;
            echo "<p class='red-text'>You forgot to select your mortgage goal!</p>";
        }
        
        if(!empty($_POST['Loan-Balance'])) {
            $loanBalance = $_POST['Loan-Balance'];
        } else {
            $loanBalance= NULL;
            echo "<p class='red-text'>You forgot to select your approximate mortgage balance!</p>";
        }
        
        if(!empty($_POST['Cash-Out'])) {
            $cashOut = $_POST['Cash-Out'];
        } else {
            $cashOut = NULL;
            echo "<p class='red-text'>You forgot to select your desired cash out!</p>";
        }
        
        if(!empty($_POST['Property-Value'])) {
            $propertyValue = $_POST['Property-Value'];
        } else {
            $propertyValue = NULL;
            echo "<p class='red-text'>You forgot to select your estimated property value!</p>";
        }
        
        if(!empty($_POST['Credit'])) {
            $credit = $_POST['Credit'];
        } else {
            $credit = NULL;
            echo "<p class='red-text'>You forgot to select your credit score range!</p>";
        }
        
        if(!empty($_POST['VA-Eligible'])) {
            $vaEligible = $_POST['VA-Eligible'];
        } else {
            $vaEligible = NULL;
            echo "<p class='red-text'>You forgot to select your VA eligibility!</p>";
        }
        
        if(!empty($_POST['First-Name'])) {
            $firstName = $_POST['First-Name'];
        } else {
            $firstName = NULL;
            echo "<p class='red-text'>You forgot to enter your first name!</p>";
        }
        
        if(!empty($_POST['Last-Name'])) {
            $lastName = $_POST['Last-Name'];
        } else {
            $lastName = NULL;
            echo "<p class='red-text'>You forgot to enter your last name!</p>";
        }
        
        if(!empty($_POST['Zip-Code'])) {
            $zipCode = $_POST['Zip-Code'];
        } else {
            $zipCode = NULL;
            echo "<p class='red-text'>You forgot to enter the zip code for the property!</p>";
        }
        
        if(!empty($_POST['Email'])) {
            $email = $_POST['Email'];
        }
        else {
            $email = NULL;
            echo "<p class='red-text'>You forgot to enter your email address!</p>";
        }
        
        if(!empty($_POST['Phone'])) {
            $phone = $_POST['Phone'];
        } else {
            $phone = NULL;
            echo "<p class='red-text'>You forgot to enter your phone number!</p>";
        }
        
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
