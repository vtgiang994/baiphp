<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	var_dump($_GET);
	echo 12345;
	echo $_GET["page"];
	 function gioithieubanthan(){
	 	$name = "Vũ Trường Giang";
	 	$year = 1994;
	 	echo "<p>Tôi tên là $name sinh năm $year</p>";
	 }
	 gioithieubanthan();
	 // $thue = $luongCB* 0.07;
	 // function TinhLuong($luongCB,$thue,$thuong,$heso){
	 	
	 // 	return ($luongCB*$heso+$thuong-$thue);
	 // }
	 // // $thue = $luongCB * 0.07;
	 // $luong1 = TinhLuong(1000000,70000,200000,2);
	 // echo "luong1";
	 // $luongCB = 1000000;
	 // $thue = $luongCB * "0.07";
	 // echo "$thue";
	 	$nhanvien_Arr = ["A", "B", "C"];
	 	$luongCB_Arr = ["A" => 1000000, "B" => 1500000, "C" => 2000000];
	 	$thuong_Arr = ["A" => 200000,"B" => 200000, "C" => 300000];
	 	$heso_Arr = ["A" => 2,"B" => 2,"C" => 2];
	 	// echo $luongCB_nArr[$nhavien_Arr[0]]
	 	$thue = 0.07;
	 function Luong($luongCB, $thuong, $heso, $thue){
        return ($luongCB*$heso+$thuong-$thue);
    }
    	// $n1 = Luong($luongCB[0],$thuong[0],$heso[0],$luongCB[0]*$thue);
    	// $n2 = Luong($luongCB[1],$thuong[1],$heso[1],$luongCB[1]*$thue);
    	// $n3 = Luong($luongCB[2],$thuong[2],$heso[2],$luongCB[2]*$thue);

    	// for ($i=0; $i <3 ; $i++) { 
    	// 	$n1 = Luong($luongCB_Arr[$i],$thuong_Arr[$i],$heso_Arr[$i],$luongCB_Arr[$i]*$thue);
    	// 	echo $n1;
    	// 	echo "<hr>";
    	// }
    	for ($i=0; $i <3 ; $i++) { 
    		$n1 = Luong($luongCB_Arr[$nhanvien_Arr[$i]],
    			$thuong_Arr[$nhanvien_Arr[$i]],
    			$heso_Arr[$nhanvien_Arr[$i]],
    			$luongCB_Arr[$nhanvien_Arr[$i]]*$thue);
    		echo $nhanvien_Arr[$i] . ": " . $n1;
    		echo "<hr>";
    	}
    	// echo $n1;
    	// echo "<hr>";
    	// echo $n2;
    	// echo "<hr>";
    	// echo $n3;

	?>

</body>
</html>