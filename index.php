<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Day la ban chinh thuc - nhung lai bi sua</h1>
	<?php
		echo "<p>day la php</p>";
		$name = "Rich";
		$age = 11;
		// $salary = 600.123;
		// echo "<br> $name <br> $age <br> $salary"; 
		// echo $name;
		// echo "<br>";
		// echo $age;
		// echo "<br>";
		// echo $salary;
		// echo "<br>";
		// $meonha = array("binz","mũm","bòn","vàng","su","đậu",2,3,4,5.25,"7");
		// var_dump($meonha) ;
		// $str1 = "11a";
		// $str2 = "23";
		// echo "aaaaaaaaaaaaaaaaaaaaaaaaaa <br>";
		// echo $str1 + $str2;
		// echo "<br>";
		// echo "Truoc tinh: " . $str1 . "<br>";
		// $str1 .= "_";
		// $str1 .= $str2;
		
		// echo "Sau tinh: " . $str1;
		// if ($age % 2 == 0) {
		// 	echo "Xanh";
		// } else {
		// 	echo "Do";
		// }
		echo "PA 1 : <br>";
		$count1 = 0; $count2 = 0;
		for ($i=1; $i <= 10; $i++) {
			$count1++; 
			if ($i < 4 ) {
				echo "bien i:" . $i . " <br>";
			} elseif ($i < 7) {
				echo "$i nho hon 7 va lon hon 3" . "<br>";
			} elseif ($i == 7) {
				echo "$i o day bang 7" . "<br>";
			} else {

			}
			// if ()
			echo "------------------------------------ <br>";
		}
		echo "so lan for 1:". $count1 . "<br>";
		// echo "PA 2 : ";
		// for ($i=0; $i < 10; $i+=2) { 
		// 	$count2++;
		// 	echo $i; echo " ";
		// }
		// echo "so lan for 2:". $count2 . "<br>";
		$a = 11;
		$b = "aaaa44aa2";
		var_dump($a);
		echo "<br>=============<br>";
		var_dump($b);
		echo "<br>=============<br>";
		// echo $a + $b;
		if ($a === $b) echo "So sanh 3 bang === ";
		if ($a == $b) echo "So sanh 2 bang == 	"
	?>
	<h2>1231424</h2>

</body>
</html>