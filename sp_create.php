<?php
$product = false;
// Khi co action Save
if (isset($_POST["save"])) {
    var_dump($_POST);
    $db = new mysqli("localhost", "root", "", "test");
    $pName = $_POST["pName"];
    $pInventory = $_POST["pInventory"];
    $pPrice = $_POST["pPrice"];
    $pSale = isset($_POST["pSale"]) ? $_POST["pSale"] : 0;
    // if (isset($_POST["pSave"])) {
    //     $pSale = $_POST["pSale"];
    // } else {
    //     $pSale = 0;
    // }
    if (isset($_GET["pid"])) {
        $pid = (int) $_GET["pid"];
        $query = "UPDATE product set description = '$pName',price = '$pPrice', inventory = '$pInventory',sale = '$pSale' where id = " . $pid;
    } else {
        $query = "INSERT into product (description,price,inventory,sale) values ('$pName', '$pPrice', '$pInventory', '$pSale')";
    }

    echo $query;
    $dbresult = $db->query($query);

    if (!$dbresult) {
        echo "loi rui";
        var_dump($dbresult);
    }
} else {

    if (isset($_GET["pid"])) {
        $db = new mysqli("localhost", "root", "", "test");
        $pid = (int) $_GET["pid"];
        $query = "SELECT * from product where id = " . $pid;
        $result = $db->query($query);
        $product = $result->fetch_row();
        var_dump($product);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">PRODUCTS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="sp.php">List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sp_create.php">Add new</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <h1>Create New Product</h1>
        </div>
        <form name="product-create" method="POST" action="">
            <div class="form-group row">
                <label for="productName" class="col-2">Name</label>
                <input type="text" name="pName" value="<?php echo $product ? $product[1] : ""; ?>" class="col-4">
            </div>
            <div class="form-group row">
                <label for="productName" class="col-2">Price</label>
                <input type="text" name="pPrice" value="<?php echo $product ? $product[2] : ""; ?>" class="col-4">
            </div>
            <div class="form-group row">
                <label for="productName" class="col-2">Inventory</label>
                <input type="text" name="pInventory" value="<?php echo $product ? $product[3] : ""; ?>" class="col-4">
            </div>
            <div class="form-group row">
                <label for="productName" class="col-2">Sale</label>
                <input type="checkbox" name="pSale" value="1" <?php echo ($product && $product[4] == 1) ? "checked" : ""; ?>>
            </div>
            <div>
                <input type="submit" name="save" value="Save">
            </div>
            <input type="checkbox" name="" value="111111" checked>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>