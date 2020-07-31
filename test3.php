<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

$prod1 = new Product();
$prod1->description = "Carrots";
$prod1->price = 1.50;
$prod1->inventory = 10;
$prod1->onsale = false;
echo "<p>Just added $prod1->description<p>\n";
$prod2 = new Product();
$prod2->description = "Eggplants";
$prod2->price = 2.00;
$prod2->inventory = 5;
$prod2->onsale = true;
echo "<p>Just added $prod2->description<p>\n";
echo "<p>Now buying 4 carrots...<p>\n";
$prod1->buyProduct(4);
echo "<p>Inventory of $prod1->description is now
 $prod1->inventory</p>\n";
echo "<p>Inventory of $prod2->description is still
 $prod2->inventory</p>\n";
?>

</body>
</html>