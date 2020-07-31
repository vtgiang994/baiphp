<?php 
	include("classes.php");
	$hanghoa = ["coca 390ml", "sua TH truemilk", "da vien"];
	$SL = ["coca 390ml" => 12, "sua TH truemilk" => 4, "da vien" => 1];
	$Giaban = ["coca 390ml" => 6000, "sua TH truemilk" => 8000, "da vien" => 10000];
	function tinhtien($SL, $Giaban){
		return ($SL*$Giaban);
	}

	// for ($i=0; $i < 3 ; $i++) { 
	// 	$thanhtoan = tinhtien($SL[$hanghoa[$i]],$Giaban[$hanghoa[$i]]);
	// 	echo $thanhtoan;
	// 	echo "<br>";
	// }
	class Sanpham {
		public $tenSP;
		public $soluong;
		public $giaban;
		public $thanhtien;
		public function tinhtien($SL, $Giaban){
			return ($SL*$Giaban);
		}
		
		// tinhtien($this->soluong,$this->giaban);
	}
	$sp1 = new Sanpham();
	$sp1->tenSP = "coca 390ml";
	$sp1->soluong = 12;
	$sp1->giaban = 6000;
	// $sp1->tinhtien();
	
	$sp2 = new Sanpham();
	$sp2->tenSP = "sua TH True Milk";
	$sp2->soluong = 4;
	$sp2->giaban = 8000;
	// $sp2->tinhtien();

	$sp3 = new Sanpham();
	$sp3->tenSP = "Chuot quang";
	$sp3->soluong = 1;
	$sp3->giaban = 80000;
	// $sp3->tinhtien();
	
	$spArray = [$sp1,$sp2,$sp3];
	var_dump($spArray);

	// class kettoan{
	// 	public $tenKT;
	// 	public function kettoan()
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- viết tiếng việt -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style>
        table, th, td ,tr {
            border: 1px solid black;
            border-collapse: collapse;
            width:30%;
        }
        .letrai {border-left:1px solid #222;}
        .keduoi {border-bottom:1px dashed #222;}
    </style>
</head>
<body>
	<!-- <div class="container">
		<div class="row">
			<div class="col">Hàng hóa</div>
			<div class="col">SL</div>
			<div class="col">Giá bán</div>
			<div class="col">Thành tiền</div>
		</div>
	</div> -->
	<div>
		<h6>Phu Gia Mini Mart</h6>
		<p>60 Nguyễn Huy Tưởng</p>
		<p>Điện thoại: 0968358975</p>
		<h2>HÓA ĐƠN BÁN LẺ</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col1">HĐ:</div>
			<div class="col">HDA210620-42</div>
		</div>
	</div>
	<div class="container">
		<div class="row keduoi">
			<div class="col letrai">Hàng Hóa</div>
			<div class="col letrai">SL</div>
			<div class="col letrai">Giá bán</div>
			<div class="col letrai">Thành tiền</div>
		</div>
		
		<!-- Mo for -->
		<?php
			for($i=0;$i<3;$i++) {
				$thanhtoan = tinhtien($SL[$hanghoa[$i]], $Giaban[$hanghoa[$i]]);
		 ?>

		<div class="row sp keduoi">
			<div class="col letrai"><?php echo ($hanghoa[$i]); ?></div>
			<div class="col letrai"><?php echo ($SL[$hanghoa[$i]]); ?></div>
			<div class="col letrai"><?php echo ($Giaban[$hanghoa[$i]]); ?></div>
			<div class="col letrai"><?php echo $thanhtoan; ?></div>
		</div>
		<?php
			} 
		?>
		<!-- dong for -->


		<!-- Mo for -->
		<?php
			for($i=0;$i<count($spArray);$i++) {
				$thanhtoan = $spArray[$i]->tinhtien($spArray[$i]->soluong, $spArray[$i]->giaban);
		 ?>

		<div class="row sp keduoi">
			<div class="col letrai"><?php echo ($spArray[$i]->tenSP); ?></div>
			<div class="col letrai"><?php echo ($spArray[$i]->soluong); ?></div>
			<div class="col letrai"><?php echo ($spArray[$i]->giaban); ?></div>
			<div class="col letrai"><?php echo ($thanhtoan); ?></div>
		</div>
		<?php
			} 
		?>
		<!-- dong for -->
			<!-- mo for -->
		<?php 
			for ($i=0; $i <4; $i++) { 
		?>
		<!-- code html -->
		<div class="row tien keduoi">
			<div class="col">Chiết khấu</div>
			<div class="col">0</div>
		</div>
		<?php 
			}
		?>
		<!-- dong for -->
		<!-- <div class="row tien">
			<div class="col">Tổng tiền</div>
			<div class="col">114.000</div>
		</div>
		<div class="row tien keduoi">
			<div class="col">Chiết khấu</div>
			<div class="col">0</div>
		</div>
		<div class="row keduoi">
			<div class="col">Tổng phải trả</div>
			<div class="col">114.000</div>
		</div>
		<div class="row keduoi">
			<div class="col">Khách trả</div>
			<div class="col">500.000</div>
		</div>
		<div class="row">
			<div class="col">Tiền còn dư</div>
			<div class="col">386.000</div>
		</div> -->
	</div>
		<?php
			
			// $prod1 = new Product();
			// $prod1->description = "Carrots";
			// $prod1->price = 1.50;
			// $prod1->inventory = 10;
			// $prod1->onsale = false;
			// echo "<p>Just added $prod1->description<p>\n";

			// $prod2 = new Product();
			// $prod2->description = "Eggpla9nts";
			// $prod2->price = 2.00;
			// $prod2->inventory = 5;
			// $prod2->onsale = true;
			// echo "<p>Just added $prod2->description<p>\n";
			// echo "<p>Now buying 4 carrots...<p>\n";
			
			// $prod1->buyProduct(4);
			// echo "<p>Inventory of $prod1->description is now
			//  $prod1->inventory</p>\n";
			// echo "<p>Inventory of $prod2->description is still
			//  $prod2->inventory</p>\n";

			 include("2/test3.php");
	?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>