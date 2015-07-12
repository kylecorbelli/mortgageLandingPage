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
                    <div class='alert alert-info'>
                        <div> <!-- Mortgage Goal Input -->
                            <h2><label for='Property-Type'>Your Mortgage Goal:</label></h2>
                            <select id='Property-Type' class='form-control' name='Property-Type'>
                                <option hidden disable selected>-Select One-</option>
                                <option value='Lower-My-Payments-Every-Month'>Lower My Payments Every Month</option>
                                <option value='Pay-Off-My-Other-Debts'>Pay Off My Other Debts</option>
                                <option value='Pay-My-Mortgage-Off-Sooner'>Pay My Mortgage Off Sooner</option>
                                <option value='Get-Cash-in-My-Hand'>Get Cash in My Hand</option>
                            </select>
                        </div> <!-- END Mortgage Goal Input -->
                        <div class='form-group'> <!-- Property Type Input -->
                            <h2><label for='Property-Type'>Property Type:</label></h2>
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
                            <h2><label for='Occupancy-Type'>Occupancy Type:</label></h2>
                            <select id='Occupancy-Type' class='form-control' name='Occupancy-Type'>
                                <option hidden disable selected>-Select One-</option>
                                <option value='Owner-Occupied'>Owner-Occupied</option>
                                <option value='Vacation-Second-Home'>Vacation / Second Home</option>
                                <option value='Income-Investment-Property'>Income / Investment Property</option>
                            </select>
                        </div> <!-- END Occupancy Input -->
                        <div class='form-group'> <!-- Property Value Input -->
                            <h2><label for='Property-Value'>Estimated Property Value:</label></h2>
                            <select id='Property-Value' class='form-control' name='Property-Value' required>
                                <option value='undefined' selected disabled hidden>-Select One-</option>
                                <option value='50,001 - 60,000'>50,001 - 60,000</option>
                                <option value='60,001 - 70,000'>60,001 - 70,000</option>
                                <option value='70,001 - 80,000'>70,001 - 80,000</option>
                                <option value='80,001 - 90,000'>80,001 - 90,000</option>
                                <option value='90,001 - 100,000'>90,001 - 100,000</option>
                                <option value='100,001 - 110,000'>100,001 - 110,000</option>
                                <option value='110,001 - 120,000'>110,001 - 120,000</option>
                                <option value='120,001 - 130,000'>120,001 - 130,000</option>
                                <option value='130,001 - 140,000'>130,001 - 140,000</option>
                                <option value='140,001 - 150,000'>140,001 - 150,000</option>
                                <option value='150,001 - 160,000'>150,001 - 160,000</option>
                                <option value='160,001 - 170,000'>160,001 - 170,000</option>
                                <option value='170,001 - 180,000'>170,001 - 180,000</option>
                                <option value='180,001 - 190,000'>180,001 - 190,000</option>
                                <option value='190,001 - 200,000'>190,001 - 200,000</option>
                                <option value='200,001 - 210,000'>200,001 - 210,000</option>
                                <option value='210,001 - 220,000'>210,001 - 220,000</option>
                                <option value='220,001 - 230,000'>220,001 - 230,000</option>
                                <option value='230,001 - 240,000'>230,001 - 240,000</option>
                                <option value='240,001 - 250,000'>240,001 - 250,000</option>
                                <option value='250,001 - 260,000'>250,001 - 260,000</option>
                                <option value='260,001 - 270,000'>260,001 - 270,000</option>
                                <option value='270,001 - 280,000'>270,001 - 280,000</option>
                                <option value='280,001 - 290,000'>280,001 - 290,000</option>
                                <option value='290,001 - 300,000'>290,001 - 300,000</option>
                                <option value='300,001 - 310,000'>300,001 - 310,000</option>
                                <option value='310,001 - 320,000'>310,001 - 320,000</option>
                                <option value='320,001 - 330,000'>320,001 - 330,000</option>
                                <option value='330,001 - 340,000'>330,001 - 340,000</option>
                                <option value='340,001 - 350,000'>340,001 - 350,000</option>
                                <option value='350,001 - 360,000'>350,001 - 360,000</option>
                                <option value='360,001 - 370,000'>360,001 - 370,000</option>
                                <option value='370,001 - 380,000'>370,001 - 380,000</option>
                                <option value='380,001 - 390,000'>380,001 - 390,000</option>
                                <option value='390,001 - 400,000'>390,001 - 400,000</option>
                                <option value='400,001 - 450,000'>400,001 - 450,000</option>
                                <option value='450,001 - 500,000'>450,001 - 500,000</option>
                                <option value='500,001 - 550,000'>500,001 - 550,000</option>
                                <option value='550,001 - 600,000'>550,001 - 600,000</option>
                                <option value='600,001 - 650,000'>600,001 - 650,000</option>
                                <option value='650,001 - 700,000'>650,001 - 700,000</option>
                                <option value='700,001 - 750,000'>700,001 - 750,000</option>
                                <option value='750,001 - 800,000'>750,001 - 800,000</option>
                                <option value='800,001 - 850,000'>800,001 - 850,000</option>
                                <option value='850,001 - 900,000'>850,001 - 900,000</option>
                                <option value='900,001 - 950,000'>900,001 - 950,000</option>
                                <option value='950,001 - 1,000,000'>950,001 - 1,000,000</option>
                                <option value='1,000,001 - 1,200,000'>1,000,001 - 1,200,000</option>
                                <option value='1,200,001 - 1,400,000'>1,200,001 - 1,400,000</option>
                                <option value='1,400,001 - 1,600,000'>1,400,001 - 1,600,000</option>
                                <option value='1,600,001 - 1,800,000'>1,600,001 - 1,800,000</option>
                                <option value='1,800,001 - 2,000,000'>1,800,001 - 2,000,000</option>
                                <option value='2,000,001 - 2,200,000'>2,000,001 - 2,200,000</option>
                                <option value='2,200,001 - 2,400,000'>2,200,001 - 2,400,000</option>
                                <option value='2,400,001 - 2,600,000'>2,400,001 - 2,600,000</option>
                                <option value='2,600,001 - 2,800,000'>2,600,001 - 2,800,000</option>
                                <option value='2,800,001 - 3,000,000'>2,800,001 - 3,000,000</option>
                                <option value='3,000,001 - 3,200,000'>3,000,001 - 3,200,000</option>
                                <option value='3,200,001 - 3,400,000'>3,200,001 - 3,400,000</option>
                                <option value='3,400,001 - 3,600,000'>3,400,001 - 3,600,000</option>
                                <option value='3,600,001 - 3,800,000'>3,600,001 - 3,800,000</option>
                                <option value='3,800,001 - 4,000,000'>3,800,001 - 4,000,000</option>
                                <option value='4,000,001 - 4,200,000'>4,000,001 - 4,200,000</option>
                                <option value='4,200,001 - 4,400,000'>4,200,001 - 4,400,000</option>
                                <option value='4,400,001 - 4,600,000'>4,400,001 - 4,600,000</option>
                                <option value='4,600,001 - 4,800,000'>4,600,001 - 4,800,000</option>
                                <option value='4,800,001 - 5,000,000'>4,800,001 - 5,000,000</option>
                                <option value='5,000,001 - 5,200,000'>5,000,001 - 5,200,000</option>
                                <option value='5,200,001 - 5,400,000'>5,200,001 - 5,400,000</option>
                                <option value='5,400,001 - 5,600,000'>5,400,001 - 5,600,000</option>
                                <option value='5,600,001 - 5,800,000'>5,600,001 - 5,800,000</option>
                                <option value='5,800,001 - 6,000,000'>5,800,001 - 6,000,000</option>
                                <option value='6,000,001 - 6,200,000'>6,000,001 - 6,200,000</option>
                                <option value='6,200,001 - 6,400,000'>6,200,001 - 6,400,000</option>
                                <option value='6,400,001 - 6,600,000'>6,400,001 - 6,600,000</option>
                                <option value='6,600,001 - 6,800,000'>6,600,001 - 6,800,000</option>
                                <option value='6,800,001 - 7,000,000'>6,800,001 - 7,000,000</option>
                                <option value='7,000,000+'>7,000,000+</option>
                            </select>
                        </div> <!-- END Property Value Input -->
                        <div class='form-group'> <!-- Mortgage Balance Input -->
                            <h2><label for='Loan-Balance'>Approximate Mortgage Balance:</label></h2>
                            <select id='Loan-Balance' class='form-control' name='Loan-Balance' required>
                                <option value='undefined' selected disabled hidden>-Select One-</option>
                                <option value='50,001 - 60,000'>50,001 - 60,000</option>
                                <option value='60,001 - 70,000'>60,001 - 70,000</option>
                                <option value='70,001 - 80,000'>70,001 - 80,000</option>
                                <option value='80,001 - 90,000'>80,001 - 90,000</option>
                                <option value='90,001 - 100,000'>90,001 - 100,000</option>
                                <option value='100,001 - 110,000'>100,001 - 110,000</option>
                                <option value='110,001 - 120,000'>110,001 - 120,000</option>
                                <option value='120,001 - 130,000'>120,001 - 130,000</option>
                                <option value='130,001 - 140,000'>130,001 - 140,000</option>
                                <option value='140,001 - 150,000'>140,001 - 150,000</option>
                                <option value='150,001 - 160,000'>150,001 - 160,000</option>
                                <option value='160,001 - 170,000'>160,001 - 170,000</option>
                                <option value='170,001 - 180,000'>170,001 - 180,000</option>
                                <option value='180,001 - 190,000'>180,001 - 190,000</option>
                                <option value='190,001 - 200,000'>190,001 - 200,000</option>
                                <option value='200,001 - 210,000'>200,001 - 210,000</option>
                                <option value='210,001 - 220,000'>210,001 - 220,000</option>
                                <option value='220,001 - 230,000'>220,001 - 230,000</option>
                                <option value='230,001 - 240,000'>230,001 - 240,000</option>
                                <option value='240,001 - 250,000'>240,001 - 250,000</option>
                                <option value='250,001 - 260,000'>250,001 - 260,000</option>
                                <option value='260,001 - 270,000'>260,001 - 270,000</option>
                                <option value='270,001 - 280,000'>270,001 - 280,000</option>
                                <option value='280,001 - 290,000'>280,001 - 290,000</option>
                                <option value='290,001 - 300,000'>290,001 - 300,000</option>
                                <option value='300,001 - 310,000'>300,001 - 310,000</option>
                                <option value='310,001 - 320,000'>310,001 - 320,000</option>
                                <option value='320,001 - 330,000'>320,001 - 330,000</option>
                                <option value='330,001 - 340,000'>330,001 - 340,000</option>
                                <option value='340,001 - 350,000'>340,001 - 350,000</option>
                                <option value='350,001 - 360,000'>350,001 - 360,000</option>
                                <option value='360,001 - 370,000'>360,001 - 370,000</option>
                                <option value='370,001 - 380,000'>370,001 - 380,000</option>
                                <option value='380,001 - 390,000'>380,001 - 390,000</option>
                                <option value='390,001 - 400,000'>390,001 - 400,000</option>
                                <option value='400,001 - 450,000'>400,001 - 450,000</option>
                                <option value='450,001 - 500,000'>450,001 - 500,000</option>
                                <option value='500,001 - 550,000'>500,001 - 550,000</option>
                                <option value='550,001 - 600,000'>550,001 - 600,000</option>
                                <option value='600,001 - 650,000'>600,001 - 650,000</option>
                                <option value='650,001 - 700,000'>650,001 - 700,000</option>
                                <option value='700,001 - 750,000'>700,001 - 750,000</option>
                                <option value='750,001 - 800,000'>750,001 - 800,000</option>
                                <option value='800,001 - 850,000'>800,001 - 850,000</option>
                                <option value='850,001 - 900,000'>850,001 - 900,000</option>
                                <option value='900,001 - 950,000'>900,001 - 950,000</option>
                                <option value='950,001 - 1,000,000'>950,001 - 1,000,000</option>
                                <option value='1,000,001 - 1,200,000'>1,000,001 - 1,200,000</option>
                                <option value='1,200,001 - 1,400,000'>1,200,001 - 1,400,000</option>
                                <option value='1,400,001 - 1,600,000'>1,400,001 - 1,600,000</option>
                                <option value='1,600,001 - 1,800,000'>1,600,001 - 1,800,000</option>
                                <option value='1,800,001 - 2,000,000'>1,800,001 - 2,000,000</option>
                                <option value='2,000,001 - 2,200,000'>2,000,001 - 2,200,000</option>
                                <option value='2,200,001 - 2,400,000'>2,200,001 - 2,400,000</option>
                                <option value='2,400,001 - 2,600,000'>2,400,001 - 2,600,000</option>
                                <option value='2,600,001 - 2,800,000'>2,600,001 - 2,800,000</option>
                                <option value='2,800,001 - 3,000,000'>2,800,001 - 3,000,000</option>
                                <option value='3,000,001 - 3,200,000'>3,000,001 - 3,200,000</option>
                                <option value='3,200,001 - 3,400,000'>3,200,001 - 3,400,000</option>
                                <option value='3,400,001 - 3,600,000'>3,400,001 - 3,600,000</option>
                                <option value='3,600,001 - 3,800,000'>3,600,001 - 3,800,000</option>
                                <option value='3,800,001 - 4,000,000'>3,800,001 - 4,000,000</option>
                                <option value='4,000,001 - 4,200,000'>4,000,001 - 4,200,000</option>
                                <option value='4,200,001 - 4,400,000'>4,200,001 - 4,400,000</option>
                                <option value='4,400,001 - 4,600,000'>4,400,001 - 4,600,000</option>
                                <option value='4,600,001 - 4,800,000'>4,600,001 - 4,800,000</option>
                                <option value='4,800,001 - 5,000,000'>4,800,001 - 5,000,000</option>
                                <option value='5,000,001 - 5,200,000'>5,000,001 - 5,200,000</option>
                                <option value='5,200,001 - 5,400,000'>5,200,001 - 5,400,000</option>
                                <option value='5,400,001 - 5,600,000'>5,400,001 - 5,600,000</option>
                                <option value='5,600,001 - 5,800,000'>5,600,001 - 5,800,000</option>
                                <option value='5,800,001 - 6,000,000'>5,800,001 - 6,000,000</option>
                                <option value='6,000,001 - 6,200,000'>6,000,001 - 6,200,000</option>
                                <option value='6,200,001 - 6,400,000'>6,200,001 - 6,400,000</option>
                                <option value='6,400,001 - 6,600,000'>6,400,001 - 6,600,000</option>
                                <option value='6,600,001 - 6,800,000'>6,600,001 - 6,800,000</option>
                                <option value='6,800,001 - 7,000,000'>6,800,001 - 7,000,000</option>
                                <option value='7,000,000+'>7,000,000+</option>
                            </select>
                        </div> <!-- END Mortgage Balance Input -->
                        <div class='form-group requiredInput'> <!-- Cash Out Input -->
                            <h2><label for='Cash-Out'>Desired Cash Out</label></h2>
                            <div class='input-group'>
                                <span class='input-group-addon'>$</span>
                                <input id='Cash-Out' class='form-control numberToComma requiredInput' type='text' name='Cash-Out'/>
                                <span class='input-group-addon'>.00</span>
                            </div>
                        </div> <!-- END Cash Out Input -->
                        <div class='form-group'> <!-- Current Rate Input -->
                            <h2><label for='First-Mortgage-Rate'>First Mortgage Interest Rate</label></h2>
                            <div class='input-group'>
                                <input id='First-Mortgage-Rate' class='form-control requiredInput' type='number' name='First-Mortgage-Rate'/>
                                <span class='input-group-addon'>%</span>
                            </div>
                        </div> <!-- END Current Rate Input -->
                        <div class='form-group'> <!-- VA Eligibility Input -->
                            <h2><label for='VA-Eligible'>Are You a Veteran?</label></h2>
                            <select id='VA-Eligible' class='form-control' name='VA-Eligible'>
                                <option value='undefined' hidden disable selected>-Select One-</option>
                                <option value='Yes'>Yes</option>
                                <option value='No'>No</option>
                            </select>
                        </div> <!-- END VA Eligibility Input -->
                        <div class='form-group'> <!-- Credit Input -->
                            <h2><label for='Credit'>How is Your Credit?</label></h2>
                            <select id='Credit' class='form-control' name='Credit'>
                                <option value='undefined' hidden disable selected>-Select One-</option>
                                <option value='Excellent-720-or-Above'>Excellent (720 or Above)</option>
                                <option value='Good-660-719'>Good (660 - 719)</option>
                                <option value='Average-620-659'>Average (620 - 659)</option>
                                <option value='Below-Average-580-619'>Below Average (580 - 619)</option>
                                <option value='Poor-579-and-Below'>Poor (579 and Below)</option>
                            </select>
                        </div> <!-- END Credit Input -->
                        <div class='form-group'> <!-- Zip Code Input -->
                            <h2><label for='Zip-Code'>Zip Code:</label></h2>
                            <div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-home'></span></span>
                                <input id='Zip-Code' class='form-control requiredInput' type='number' name='FZip-Code'/>
                            </div>
                        </div> <!-- END Zip Code Input -->
                        <div class='form-group'> <!-- First Name Input -->
                            <h2><label for='First-Name'>First Name:</label></h2>
                            <div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-pencil'></span></span>
                                <input id='First-Name' class='form-control requiredInput' type='text' name='First-Name' />
                            </div>
                        </div> <!-- END First Name Input -->
                        <div class='form-group'> <!-- Last Name Input -->
                            <h2><label for='Last-Name'>Last Name:</label></h2>
                            <div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-pencil'></span></span>
                                <input id='Last-Name' class='form-control requiredInput' type='text' name='Last-Name' />
                            </div>
                        </div> <!-- END Last Name Input -->
                        <div class='form-group'> <!-- Email Input -->
                            <h2><label for='Email'>Email:</label></h2>
                            <div class='input-group'>
                                <span class='input-group-addon'><span class='glyphicon glyphicon-envelope'></span></span>
                                <input id='Email' class='form-control requiredInput' type='email' name='Email' />
                            </div>
                        </div> <!-- END Email Input -->
                        <div class='form-group'> <!-- Phone Input -->
                            <h2><label for='Phone'>Phone:</label></h2>
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
