<?php 
	$db = new mysqli("localhost","root","","sanpham");
	// khoi tao gia tri
	$top = 1;
	$orderby = "Price";
	$thutu = "ASC";
	if(isset($_GET["top"])){
		$top = $_GET["top"];
	}
	if(isset($_GET["orderby"])){	
		$orderby = $_GET["orderby"];
	}
	if(isset($_GET["thutu"])){
		$thutu = $_GET["thutu"];
	}
	$query = "SELECT ID, Name, Description, Price, inventory, Sale from product ORDER BY $orderby $thutu LIMIT $top";
	$result = $db->query($query);
	// var_dump($result);

	while($row = $result->fetch_assoc()){
		echo "============<br>";
		echo "ID:". $row['ID'] . "<br>";
		echo "Name:". $row['Name'] . "<br>";
		echo "Description:". $row['Description'] . "<br>";
		echo "Price:". $row['Price'] . "<br>";
		echo "inventory:". $row['inventory'] . "<br>";
		echo "Sale:". $row['Sale'] . "<br>";
	}
	// $row = $result->fetch_assoc();
	// echo "<br>";
	// var_dump($row);

?>