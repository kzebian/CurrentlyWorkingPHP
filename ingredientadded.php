<?php include 'inherited.php' ?>
<br>
<html>
<head>
    <title>Add Item</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
    $missingData = array();

    if(empty($_POST['ingredientNo'])){

        // Adds name to array
        $missingData[] = 'Ingredient Number';

    } else {

        // Trim white space from the name and store the name
        $i_no = ($_POST['ingredientNo']);

    }

    if(empty($_POST['ingredientName'])){

        // Adds name to array
        $missingData[] = 'Ingredient Name';

    } else{

        // Trim white space from the name and store the name
        $i_name = ($_POST['ingredientName']);

    }

    if(empty($_POST['dateOfPurchase'])){

        // Adds name to array
        $missingData[] = 'Date Of Purchase';

    } else {

        // Trim white space from the name and store the name
        $dop = ($_POST['dateOfPurchase']);

    }

    if(empty($_POST['dateOfExpiry'])){

        // Adds name to array
        $missingData[] = 'Date Of Expiry';

    } else {

        // Trim white space from the name and store the name
        $doe = ($_POST['dateOfExpiry']);

    }

    if(empty($_POST['cost'])){

        // Adds name to array
        $missingData[] = 'Cost';

    } else {

        // Trim white space from the name and store the name
        $cost = ($_POST['cost']);

    }

    if(empty($_POST['quantity'])){

        // Adds name to array
        $missingData[] = 'Quantity';

    } else {

        // Trim white space from the name and store the name
        $quantity = ($_POST['quantity']);

    }

    if(empty($_POST['supplierNo'])){

        // Adds name to array
        $missingData[] = 'supplierNo';

    } else {

        // Trim white space from the name and store the name
        $s_no = ($_POST['supplierNo']);

    }

if(empty($missingData)){

    require_once('./mysqli_connect.php');

    $query = "INSERT INTO ingredients (ingredientNo, ingredientName, dateOfPurchase,
        dateOfExpiry, cost, quantity, supplierNo) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($dbc, $query);

    mysqli_stmt_bind_param($stmt, "isssdii", $i_no, $i_name, $dop, $doe, $cost, $quantity, $s_no);

    mysqli_stmt_execute($stmt);

    $rowsAffected = mysqli_stmt_affected_rows($stmt);

    if($rowsAffected == 1){

        echo 'Ingredient Entered';

        mysqli_stmt_close($stmt);

        mysqli_close($dbc);

    } else {

        echo 'Error Occurred<br />';
        echo mysqli_error();

        mysqli_stmt_close($stmt);

        mysqli_close($dbc);

    }

} else {

    echo 'You need to enter the following data<br />';

    foreach ($missingData as $missing) {

        echo "$missing<br />";

        }
    }


}
?>

<form action="http://localhost/ingredientadded.php/" method="post">

    <b>Add a New Ingredient</b>

    <p>Ingredient No:
        <input type="text" name="ingredientNo" size="30" value="1007" />
    </p>

    <p>Ingredient Name:
        <input type="text" name="ingredientName" size="30" value="KKKKK" />
    </p>

    <p>Date Of Purchase:
        <input type="text" name="dateOfPurchase" size="30" value="1111-11-11" />
    </p>

    <p>Date Of Expiry:
        <input type="text" name="dateOfExpiry" size="30" value="1111-11-12" />
    </p>

    <p>Cost:
        <input type="text" name="cost" size="30" value="3.8" />
    </p>

    <p>Quantity:
        <input type="text" name="quantity" size="30" maxlength="2" value="12" />
    </p>

    <p>Supplier Number:
        <input type="text" name="supplierNo" size="30" maxlength="5" value="21" />
    </p>

    <p>
        <input type="submit" name="submit" value="Send" />
    </p>

</form>
</body>
</html>