<?php
$db = new mysqli("localhost", "root", "", "sanpham");
$result = false;
if (isset($_GET["cid"])) {
    $cid = $_GET["cid"];
    $query = "SELECT id, name, description from category where id = " . $cid;
    $result = $db->query($query);
}
if (isset($_POST["save"])) {
    $Cname = $_POST["Cname"];
    $Cdes = $_POST["Cdescription"];
    $query = "UPDATE category set name = '" .  $Cname . "' ,description =  '" . $Cdes . "' where id = " . $cid;
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
        <form name="" method="POST" action=>
            <?php
            if ($result) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="form-group">
                        <label class="col-2">Name</label>
                        <input type="text" name="Cname" value="<?php echo $row["name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-2">Description</label>
                        <input type="text" name="Cdescription" value="<?php echo $row["description"]; ?>">
                    </div>
            <?php
                }
            } else{
                echo "k co category nay";
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