<!DOCTYPE html>
<html>
    <?PHP
        include 'include/head.php';
        include 'include/connection.php';
    ?>
    <body>
        <div id='page-wrapper' class='container-fluid'>
            <div class='row'>
                <div class='col-med-12'>
                    <?PHP
                        $columnsQuery = "
                            SHOW COLUMNS
                            FROM `Leads`
                        ";
                        $entriesQuery = "
                            SELECT *
                            FROM `Leads`
                            ORDER BY `ID`
                        ";
                        $columns = mysql_query($columnsQuery);
                        $result = mysql_query($entriesQuery);
                        echo "<table class='table table-striped'><thead><tr>";
                        while($columnHead = mysql_fetch_array($columns)) {
                            echo '<th>' . $columnHead['Field'] . '</th>';
                        }
                        echo '</tr></thead><tbody>';
                        while($entry = mysql_fetch_array($result)) {
                            echo '<tr><td>' . $entry['ID'] . '</td><td>' . $entry['Date Added'] . '</td><td>' . $entry['Zip Code'] . '</td><td>' . $entry['Estimated Credit'] . '</td><td>' . $entry['Property Type'] . '</td><td>' . $entry['Estimated Property Value'] . '</td><td>' . $entry['Approximate Mortgage Balance'] . '</td><td>' . $entry['Current Mortgage Rate'] . '</td><td>' . $entry['Reason for Refinance'] . '</td><td>' . $entry['VA Eligibly'] . '</td><td>' . $entry['First Name'] . '</td><td>' . $entry['Last Name'] . '</td><td>' . $entry['Email'] . '</td><td>' . $entry['Phone'] . '</td><td>' . $entry['Subject Address'] . '</td></tr>';
                        }
                        echo '</tbody></table>';
                    ?>
                </div>
            </div>
        </div>
        <?PHP
            include 'include/footer.php';
        ?>
    </body>
</html>
