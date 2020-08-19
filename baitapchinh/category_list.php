<?php
$db = new mysqli("localhost", "root", "", "sanpham");
$query = "SELECT * from category";
$result = $db->query($query);
// Delete
if (isset($_GET["action"]) && $_GET["action"] === "delete" & $_GET["idC"]){
    $idC = (int) $_GET["idC"];
    $query = "DELETE FROM category where id = " . $idC;
    $dbresult = $db->query($query);
    if (!$result) {
        var_dump($dbresult);
    } else{
        $queyry = "SELECT * from category";
        $result = $db->query($query);
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
        <div class="row">
            <div class="col-2">STT</div>
            <div class="col-2">Name</div>
            <div class="col-2">Description</div>
        </div>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="row">
                <div class="col-2"><?php echo $row["id"]; ?></div>
                <div class="col-2"><?php echo $row["name"]; ?></div>
                <div class="col-2"><?php echo $row["description"]; ?></div>
                <div>
                    <span><a href="category_list?action=delete&idC<?php echo $row["id"]; ?>">Delete</a></span>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>