<!DOCTYPE html>
<html>
    
    <!--
    
    GitHub documentation: https://github.com/pacificLiving/mortgageLandingPage/tree/master/public_html
    
    -Kyle Corbelli
    
    -->
    
    <?PHP
        include 'include/head.php';
        include 'include/connection.php';
    ?>
    <body>
        <div id='page-wrapper' class='container-fluid'>
            <div class='row'>
                <div class='col-sm-6 col-sm-push-3 col-md-4 col-md-push-4'>
                    <div class='well'>
                        <div> <!-- Mortgage Goal Input -->
                            <h2>Your Mortgage Goal:</h2>
                            <h4>(Check all that apply)</h4>
                            <div class='row checkbox'>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' value='Lower-Monthly-Payment' /> Lower Monthly Payment
                                    </label>
                                </div>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' value='Debt-Consolidation' /> Debt Consolidation
                                    </label>
                                </div>
                            </div>
                            <div class='row checkbox'>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' value='Shorten-Loan-Term' /> Shorten Loan Term
                                    </label>
                                </div>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' value='Cash-Out-Refinance' /> Cash Out Refinance
                                    </label>
                                </div>
                            </div>
                        </div> <!-- END Mortgage Goal Input -->
                        <div class='form-group'> <!-- Property Type Input -->
                            <label for='Property-Type'><h2>Property Type:</h2></label>
                            <select id='Property-Type' class='form-control' name='Property-Type'>
                                <option hidden disable selected>-Select One-</option>
                                <option value='Single-Family-Detached-House'>Single-Family Detached House</option>
                                <option value='Condominium'>Condominium</option>
                                <option value='Townhouse'>Townhouse</option>
                                <option value='Multi-Family-Building'>Multi-Family Building</option>
                                <option value='Land-Lot'>Land / Lot</option>
                            </select>
                        </div> <!-- END Property Type Input -->
                        <div class='form-group'> <!-- Occupancy Input -->
                            <label for='Occupancy-Type'><h2>Occupancy Type:</h2></label>
                            <select id='Occupancy-Type' class='form-control' name='Occupancy-Type'>
                                <option hidden disable selected>-Select One-</option>
                                <option value='Owner-Occupied'>Owner-Occupied</option>
                                <option value='Vacation-Second-Home'>Vacation / Second Home</option>
                                <option value='Income-Investment-Property'>Income / Investment Property</option>
                            </select>
                        </div> <!-- END Occupancy Input -->
                        <div class='form-group'> <!-- Property Value Input -->
                            <label for='Property-Value'><h2>Estimated Property Value:</h2></label>
                            <div class='input-group'>
                                <span class='input-group-addon'>$</span>
                                <input id='Property-Value' class='form-control numberToComma requiredInput' type='text' name='Property-Value'/>
                                <span class='input-group-addon'>.00</span>
                            </div>
                        </div> <!-- END Property Value Input -->
                        <div class='form-group'> <!-- Mortgage Balance Input -->
                            <label for='Loan-Balance'><h2>Approximate Mortgage Balance:</h2></label>
                            <div class='input-group'>
                                <span class='input-group-addon'>$</span>
                                <input id='Loan-Balance' class='form-control numberToComma requiredInput' type='text' name='Loan-Balance'/>
                                <span class='input-group-addon'>.00</span>
                            </div>
                        </div> <!-- END Mortgage Balance Input -->
                        <div class='form-group requiredInput'> <!-- Cash Out Input -->
                            <label for='Cash-Out'><h2>Desired Cash Out</h2></label>
                            <div class='input-group'>
                                <span class='input-group-addon'>$</span>
                                <input id='Cash-Out' class='form-control numberToComma requiredInput' type='text' name='Cash-Out'/>
                                <span class='input-group-addon'>.00</span>
                            </div>
                        </div> <!-- END Cash Out Input -->
                        <div class='form-group'> <!-- Current Rate Input -->
                            <label for='First-Mortgage-Rate'><h2>First Mortgage Interest Rate</h2></label>
                            <div class='input-group'>
                                <input id='First-Mortgage-Rate' class='form-control requiredInput' type='number' name='First-Mortgage-Rate'/>
                                <span class='input-group-addon'>%</span>
                            </div>
                        </div> <!-- ENDCurrent Rate Input -->
                        <div class='form-group'> <!-- VA Eligibility Input -->
                            <h2>Are You a Veteran?</h2>
                            <div class='form-group'>
                                <div class='radio'>
                                    <label>
                                        <input type='radio' name='VA-Eligible' value='Yes' /> Yes
                                    </label>
                                </div>
                                <div class='radio'>
                                    <label>
                                        <input type='radio' name='VA-Eligible' value='No' /> No
                                    </label>
                                </div>
                            </div>
                        </div> <!-- END VA Eligibility Input -->
                        <div class='form-group'> <!-- Credit Input -->
                            <label for='Credit'><h2>How is Your Credit?</h2></label>
                            <select id='Credit' class='form-control' name='Credit'>
                                <option hidden disable selected>-Select One-</option>
                                <option value='Excellent-720-or-Above'>Excellent (720 or Above)</option>
                                <option value='Good-660-719'>Good (660 - 719)</option>
                                <option value='Average-620-659'>Average (620 - 659)</option>
                                <option value='Below-Average-580-619'>Below Average (580 - 619)</option>
                                <option value='Poor-579-and-Below'>Poor (579 and Below)</option>
                            </select>
                        </div> <!-- END Credit Input -->
                        <div class='form-group'> <!-- First Name Input -->
                            <label for='First-Name'><h2>First Name:</h2></label>
                            <input id='First-Name' class='form-control requiredInput' type='text' name='First-Name' />
                        </div> <!-- END First Name Input -->
                        <div class='form-group'> <!-- Last Name Input -->
                            <label for='Last-Name'><h2>Last Name:</h2></label>
                            <input id='Last-Name' class='form-control requiredInput' type='text' name='Last-Name' />
                        </div> <!-- END Last Name Input -->
                        <div class='form-group'> <!-- Email Input -->
                            <label for='Email'><h2>Email:</h2></label>
                            <div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-envelope'></span></span>
                                <input id='Email' class='form-control requiredInput' type='email' name='Email' />
                            </div>
                        </div> <!-- END Email Input -->
                        <div class='form-group'> <!-- Phone Input -->
                            <label for='Phone'><h2>Phone:</h2></label>
                            <div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-phone'></span></span>
                                <input id='Phone' class='form-control requiredInput' type='tel' name='Phone' />
                            </div>
                        </div> <!-- END Phone Input -->
                    </div> <!-- END Well that holds all inputs -->
                </div>
            </div>
        </div>
        <?PHP
            include 'include/footer.php';
        ?>
    </body>
</html>
