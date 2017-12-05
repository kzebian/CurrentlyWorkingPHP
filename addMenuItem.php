
<html>
<head>
    <title>Add Menu Item</title>
    <br>
    <?php include 'inherited.php' ?>
    <br>
</head>
<body>


<?php
if(isset($_POST['save'])){
    $mNo = $_POST['menuNo'];
    $mName = $_POST['menuName'];
    $cost = $_POST['cost'];
    $price = $_POST['price'];

    $sql = "INSERT INTO menuitem (menuNo, menuName, cost, price) VALUES ($mNo, $mName, $cost, $price)";
    $response = @mysqli_query($dbc, $sql);
}
?>

<form action="http://localhost/addMenuItem.php/" method="post">

    <b>Add new menu item</b>

    <p>Menu Number:
        <input type="Integer" name="menuNo" size="30" value="" />
    </p>

    <p>Food Name:
        <input type="text" name="menuName" size="30" value="" />
    </p>

    <p>Cost:
        <input type="Double" name="cost" size="30" maxlength="5" value="" />
    </p>

    <p>price:
        <input type="Double" name="price" size="30" maxlength="5" value="" />
    </p>

    <p>
        <input type="submit" name="save" value="Send" />
    </p>

</form>
</body>
</html>