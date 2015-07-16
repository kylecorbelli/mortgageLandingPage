<footer>
    <?PHP
        $copyText = ' Ideal Home Loans. All rights reserved.<br />';
        $copyText .= 'Regulated by the Division of Real Estate NMLS ID 136756. www.dora.state.co.us<br />';
        $copyText .= 'CA Finance Lender License #603C821. TX Registered Mortgage Banker.<br />';
        $copyText .= 'Ideal Home Loans is a registered trademark of Ideal Home Loans LLC.<br />';
        $copyText .= 'Software development by Park Lane Productions.';
        if(date('Y') == 2015) {
            echo 'Copyright &copy; ' . date('Y') . $copyText;
        } else {
            echo 'Copyright &copy; 2015 - ' . date('Y') . $copyText;
        }
    ?>
</footer>
