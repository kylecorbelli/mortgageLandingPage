<!DOCTYPE html>
<html>
    <?PHP
        include 'include/head.php';
        include 'include/connection.php';
    ?>
    <body>
        <div id='page-wrapper' class='container-fluid'>
            <div class='row'>
                <div class='col-sm-4 col-sm-push-4'>
                    <div class='well'>
                        <div> <!-- Mortgage Goal Input -->
                            <h2>Your Mortgage Goal:</h2>
                            <h4>(Check all that apply)</h4>
                            <div class='row checkbox'>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' /> Lower Monthly Payment
                                    </label>
                                </div>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' /> Debt Consolidation
                                    </label>
                                </div>
                            </div>
                            <div class='row checkbox'>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' /> Shorten Loan Term
                                    </label>
                                </div>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' /> Cash Out Refinance
                                    </label>
                                </div>
                            </div>
                        </div> <!-- END Mortgage Goal Input -->
                    </div> <!-- END Well that holds all inputs -->
                </div>
            </div>
        </div>
        <?PHP
            include 'include/footer.php';
        ?>
    </body>
</html>
