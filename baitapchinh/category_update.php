<?php
$db = new mysqli("localhost", "root", "", "sanpham");
// khi co GET thi lay du lieu
if (isset($_GET["idC"])) {
    $idC = $_GET["idC"];
    $query = "SELECT id, name, description from category where id =" . $idC;
    // echo $query;
    $result = $db->query($query);
}
// khi co POST thi luu du lieu
if (isset($_POST["save"])) {
    $nameC =  $_POST["nameC"];
    $descriptionC = $_POST["descriptionC"];
    $query = "UPDATE category Set name = '" . $nameC . "' ,description = '" . $descriptionC . "' where id = " . $idC;
    // echo $query;
    $resultUP = $db->query($query);
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
        <form name="" method="POST" action="">
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="form-group">
                    <label for="" class="col-2">Name</label>
                    <input type="text" name="nameC" value="<?php echo $row["name"]; ?>">
                </div>
                <div class="form-group">
                    <label for="" class="col-2">Description</label>
                    <input type="text" name="descriptionC" value="<?php echo $row["description"]; ?>">
                </div>
            <?php
            }
            ?>
            <div>
                <input type="submit" name="Save" value="save">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>