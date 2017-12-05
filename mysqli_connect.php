<?php

// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '^Kurosaki29');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'restaurantinventorymanagement');

// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, '3306')
OR die('Could not connect to MySQL: ' .
    mysqli_connect_error());
?>