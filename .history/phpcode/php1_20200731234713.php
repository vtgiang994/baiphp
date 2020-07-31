<!DOCTYPE html>
<html>

<head>
	<title>POST GET</title>
</head>

<body>
	<h1>Commit code from AN</h1>
	<h1>This is a test of PHP code</h1>
	<?php
	echo "<p>This text was dynamically generated!</p>";
	echo "<p>This text was dynamically generated!</p>\n";

	if (isset($_POST['Trang'])) {
		$Trang = $_POST['Trang'];
		echo "Trang số: $Trang <br>";
	}
	?>
	<div>
		<form method="post" action="">
			Trang:
			<input type="text" name="Trang" value="" /><br>
			IPP:
			<input type="text" name="IPP" value="" />
			<input type="submit" name="cal" value="Nhập" />
		</form>
	</div>
	<h1>Testing PHP OOP setters and getters</h1>
	<?php
	class Product
	{
		private $description;
		private $price;
		private $inventory;
		private $onsale;
		public function __set($name, $value)
		{
			if ($name == "price" && $value < 0) {
				echo "<p>Invalid price set<p>\n";
				$this->price = 0;
			} elseif ($name == "inventory" && $value < 0) {
				echo "<p>Invalid inventory set: $value</p>\n";
			} else {
				$this->$name = $value;
			}
		}
		public function __get($name)
		{
			return $this->$name;
		}
		public function buyProduct($amount)
		{
			if ($this->inventory >= $amount) {
				$this->inventory -= $amount;
			} else {
				echo "<p>Sorry, invalid inventory requested:
				$amount</p>\n";
				echo "<p>There are only $this->inventory
				left</p>\n";
			}
		}
	}
	$prod1 = new Product();
	$prod1->description = "Carrots";
	$prod1->price = 1.50;
	$prod1->inventory = 5;
	$prod1->onsale = false;
	echo "<p>Just added: $prod1->inventory $prod1->description</p>\n";
	echo "<p>Now buying: 4 carrots <p>\n";
	$prod1->buyProduct(4);
	echo "<p>Inventory of $prod1->description is now: $prod1->inventory</p>\n";
	echo "<p>Trying to set carrot inventory to: -1:</p>\n";
	$prod1->inventory = -1;
	echo "<p>Now trying to buy: 10 carrots...</p>\n";
	$prod1->buyProduct(10);
	echo "<p>Inventory of $prod1->description is now: $prod1->inventory</p>\n";
	?>
</body>

</html>