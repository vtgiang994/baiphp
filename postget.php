<!DOCTYPE html>
<html>
<head>
	<title>postget</title>
</head>
<body>
	<?php 
	$pageArr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];

	$page = 1;

	$IPP = 5;

	// $minphatupage = $page*$IPP - $IPP + 1;
	// $maxphantupage = $page * $IPP;
	if(isset($_POST['page'])){
		$page = $_POST['page'];
		// echo "Trang so: $page <br>"; 
	}
	if(isset($_POST['IPP'])){
		$IPP = $_POST['IPP'];
	}
	echo $page;
	var_dump($page);
	if((int) $page && (int) $IPP){
		$tongphantumang = count($pageArr);
	$pagemax = floor($tongphantumang/$IPP);
	echo $pagemax . "<br>";
	$phandu = $tongphantumang%$IPP;
	echo $phandu . "<br>";

	if($phandu > 0){
		$pagemax++;
		echo $pagemax . "<br>";
	}
	if($page > $pagemax){
		$page = $pagemax;
		echo "khong co trang nay, vui long nhap lai";
	}else {
		$minphatupage = $page*$IPP - $IPP + 1;
		$maxphantupage = $page * $IPP;
		if($maxphantupage > $tongphantumang){
			$maxphantupage = $tongphantumang;
		}

		for ($i= $minphatupage; $i <= $maxphantupage ; $i++) { 
			echo $pageArr[$i-1];
		}
	}
} else{
	echo "nhap sai, vui long nhap lai";
}
	// $tongphantumang = count($pageArr);
	// $phannguyen = floor($tongphantumang/$IPP);
	// echo $phannguyen . "<br>";
	// $phandu = $tongphantumang%$IPP;
	// echo $phandu . "<br>";
	// if($phandu > 0){
	// 	$pagemax = $phannguyen + 1;
	// 	echo $pagemax . "<br>";
	// }
	// if($page > $pagemax){
	// 	$page = $pagemax;
	// 	echo "khong co trang nay, vui long nhap lai";
	// }else {
	// 	$minphatupage = $page*$IPP - $IPP + 1;
	// 	$maxphantupage = $page * $IPP;
	// 	if($maxphantupage > $tongphantumang){
	// 		$maxphantupage = $tongphantumang;
	// 	}

	// 	for ($i= $minphatupage; $i <= $maxphantupage ; $i++) { 
	// 		echo $pageArr[$i-1];
	// 	}
	// }
	

	?>
	<div>
		<form method="post" action="">
			Trang:
			<input type="text" name="page" value=""/><br>
			IPP  :
			<input type="text" name="IPP" value="">
			<input type="submit" name="cal" value="Enter">
		</form>
	</div>
</body>
</html>