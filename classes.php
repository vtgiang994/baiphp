<?php
class Product {
			 public $description;
			 public $price;
			 public $inventory;
			 public $onsale;
			 public function buyProduct($amount) {
			 $this->inventory -= $amount;
			 }
			}

$bien = [1,2,3,4,5,6];
// echo "day la so le: ";
$sochan = "day la so chan: ";
$sole = "day la so le: ";
for ($i=0; $i < 6; $i++) { 
	if($bien[$i]%2 === 0){
		$sochan = $sochan . $bien[$i] . ",";
	}else{
		$sole = $sole . $bien[$i] . ",";
	}
}
// $lensc = strlen($sochan);
// $lensl = strlen($sole);
// $sochan = substr($sochan,0,$lensc - 1);
// $sole = substr($sole,0,$lensl - 1);
function cutstring($str){
	$lenstr = strlen($str);
	$str = substr($str,0,$lenstr - 1);
	return $str;
}
echo cutstring($sochan);
// $sochan = cutstring($sochan);
// echo $sochan;
echo "<br>";

// echo $sole;
// for ($i=0; $i < 6 ; $i++) { 
// if ($bien[$i]%2 !== 0) {
// 	echo $bien[$i] . ",";
// }
// }
// echo "<br>";
// echo "day la so chan: ";
// for ($i=0; $i < 6 ; $i++) { 
// if ($bien[$i]%2 === 0) {
// 	echo $bien[$i] . ",";
// }
// }
// khoi tao gia tri
$db1 = new mysqli ("localhost","root","","giang");
$query = "SELECT post_title FROM wp_posts";
$result = $db1->query($query);
while($row = $result->fetch_assoc()){
	echo "My Title: " . $row['post_title'] . "<br>";
}
?>