<?php
if (isset($_POST["save"])) {
    $dbase = new mysqli("localhost", "root", "", "sanpham");
    $tenSP = $_POST['tenSP'];
    $motaSP = $_POST['motaSP'];
    $giaSP = $_POST['giaSP'];
    $invenSP = $_POST['invenSP'];
    $saleSP = isset($_POST['saleSP']) ? $_POST['saleSP'] : 0;
    $query = "INSERT into product (Name,Description,Price,inventory,Sale) VALUE ('$tenSP','$motaSP','$giaSP','$invenSP','$saleSP')";
    echo $query;
    $result = $dbase->query($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">


        <form name="tenSP" method="POST" action="">
            <div class="form-group">
                <label for="" class="col-2">Name</label>
                <input type="text" name="tenSP" value="">
            </div>
            <div class="form-group">
                <label for="" class="col-2">Description</label>
                <input type="text" name="motaSP" value="">
            </div>
            <div class="form-group">
                <label for="" class="col-2">Price</label>
                <input type="text" name="giaSP" value="">
            </div>
            <div class="form-group">
                <label for="" class="col-2">Inventory</label>
                <input type="text" name="invenSP" value="">
            </div>
            <div class="form-group">
                <label for="" class="col-2">Sale</label>
                <input type="checkbox" name="saleSP" value="1">
            </div>
            <div>
                <input type="submit" name="save" value="Save">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>