
<?php include 'inherited.php' ?>
<br>
<html>
<body>
<?php
// Get a connection for the database
require_once('./mysqli_connect.php');

// Create a query for the database
$query = "SELECT * FROM ingredients";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

    echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>Ingredient No</b></td>
<td align="left"><b>Ingredient Name</b></td>
<td align="left"><b>Date Of Purchase</b></td>
<td align="left"><b>Date Of Expiry</b></td>
<td align="left"><b>Cost</b></td>
<td align="left"><b>Quantity</b></td>
<td align="left"><b>Supplier Number</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
    while($row = mysqli_fetch_array($response)){

        echo '<tr><td align="left">' .
            $row['ingredientNo'] . '</td><td align="left">' .
            $row['ingredientName'] . '</td><td align="left">' .
            $row['dateOfPurchase'] . '</td><td align="left">' .
            $row['dateOfExpiry'] . '</td><td align="left">' .
            $row['cost'] . '</td><td align="left">' .
            $row['quantity'] . '</td><td align="left">' .
            $row['supplierNo'] . '</td><td align="left">';

        echo '</tr>';
    }

    echo '</table>';

} else {

    echo "Couldn't issue database query<br />";

    echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
</body>
</html>


