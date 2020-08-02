<?php
$db = new mysqli("localhost", "root", "", "test");
$query = "SELECT * from product";
$result = $db->query($query);
// Xoa 
if (isset($_GET["action"]) && $_GET["action"] === "delete" && $_GET["pid"]) {
    $pid = (int) $_GET["pid"];
    $query = "DELETE from product where id = " . $pid;
    $db->query($query);
}
// Sua 
if (isset($_GET["action"]) && $_GET["action"] === "edit") {
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
    <style>
        .badge a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <form action="sp.php" method="POST">
            <input type="hidden" name="action" value="">
        </form> -->
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
            <h1>Products </h1>
        </div>
        <div class="table-result">
            <span class="badge badge-success"><a href="sp_create.php">Add new</a></span>
            <div class="table-header">
                <div class="row">
                    <div class="col pid">
                        ID
                    </div>
                    <div class="col name">
                        Name
                    </div>
                    <div class="col price">
                        Price
                    </div>
                    <div class="col inv">
                        Inventory
                    </div>
                    <div class="col sale">
                        Sale
                    </div>
                    <div class="col sale">
                        Actions
                    </div>
                </div>
            </div>
            <div class="table-body">
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="row">
                        <div class="col pid">
                            <?php echo $row["id"]; ?>
                        </div>
                        <div class="col name">
                            <?php echo $row["description"]; ?>
                        </div>
                        <div class="col price">
                            <?php echo $row["price"]; ?>
                        </div>
                        <div class="col inv">
                            <?php echo $row["inventory"]; ?>
                        </div>
                        <div class="col sale">
                            <?php echo $row["sale"]; ?>
                        </div>
                        <div class="col sale">
                            <span class="badge badge-info"><a href="sp.php?action=edit&pid=<?php echo $row["id"]; ?>">Edit</a></span> |
                            <span class="badge badge-danger"><a href="sp.php?action=delete&pid=<?php echo $row["id"]; ?>">Delete</a></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>