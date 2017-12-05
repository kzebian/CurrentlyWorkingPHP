
<html>
<head>
<title>Add Ingredient</title>
<br>
<?php include 'inherited.php' ?>
<br>
</head>
<body>

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

