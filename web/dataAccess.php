<?php

try
{
	// Create the PDO connection
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex)
{
	// If this were in production, you would not want to echo
	// the details of the exception.
	echo "Error connecting to DB. Details: $ex";
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Data Access</title>
</head>

<body>
<div>

<h1>Shopping Cart</h1>

<?php
// In this example, for simplicity, the query is executed
// right here and the data echoed out as we iterate the query.
// You could imagine that in a more involved application, we
// would likely query the database in a completely separate file / function
// and build a list of objects that held the components of each
// scripture. Then, here on the page, we could simply call that 
// function, and iterate through the list that was returned and
// print each component.
// First, prepare the statement
// Notice that we avoid using "SELECT *" here. This is considered
// good practice so we don't inadvertently bring back data we don't
// want, especially if the database changes later.
$statement = $db->prepare("SELECT name, description, price, created FROM products");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<p>';
	echo '<strong>' . $row['name'] . ' ' . $row['description'] . ':';
	echo $row['price'] . '</strong>' . ' - ' . $row['created'];
	echo '</p>';
}
?>


</div>

</body>
</html>
