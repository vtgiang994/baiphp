<?php
$dbase = new mysqli("localhost", "root", "", "sanpham");
$query = "SELECT * from product";
$result = $dbase->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <table>
        <h1>SAN PHAM</h1>
        <div class="container">
            <div class="row keduoi ketren">
                <div class="col letrai">STT</div>
                <div class="col letrai">Ten SP</div>
                <div class="col letrai">Mo ta</div>
                <div class="col letrai">Gia</div>
                <div class="col letrai">So luong</div>
                <div class="col letrai lephai">Sale</div>
            </div>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="row keduoi">
                    <div class="col keduoi"><?php echo $row["ID"]; ?></div>
                    <div class="col letrai"><?php echo $row["Name"]; ?></div>
                    <div class="col letrai"><?php echo $row["Description"]; ?></div>
                    <div class="col letrai"><?php echo $row["Price"]; ?></div>
                    <div class="col letrai"><?php echo $row["inventory"]; ?></div>
                    <div class="col letrai lephai"><?php echo $row["Sale"]; ?></div>
                </div>
            <?php
            }
            ?>

        </div>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>