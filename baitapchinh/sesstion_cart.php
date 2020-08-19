<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h1>Shopping Cart</h1>
    <form action="sesstion_cart.php" method="post">
        <table>

            <tr>
                <th>Item</th>
                <th>Quality</th>
            </tr>
            <tr>
                <td>Apples</td>
                <td><input type="text" name="apples" size="2"></td>
            </tr>
            <tr>
                <td>Banana</td>
                <td><input type="text" name="banana" size="2"></td>
            </tr>
        </table>
        <input type="submit" value="Click to add to cart">
    </form>
    <br>
    <?php
    // var_dump($_POST);
    if (isset($_POST['apples'])) {
        echo "dasdiahwquf";
        if (is_numeric($_POST['apples'])) {
            $_SESSION['cart']['apples'] = $_POST['apples'];
        } elseif ($_POST['apples'] == "Remove") {
            unset($_SESSION['cart']['apples']);
        }
    }
    if (isset($_POST['banana'])) {
        if (is_numeric($_POST['banana'])) {
            $_SESSION['cart']['banana'] = $_POST['banana'];
        } elseif ($_POST['banana'] == "Remove") {
            unset($_SESSION['cart']['banana']);
        }
    }
    // echo "1111111111111";
    // var_dump($_SESSION);
    ?>
    <fieldset style="width:300px">
        <legend>Your shopping cart</legend>
        <?php
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
            echo "Your shopping cart is empty";
        } else {
            echo "=========== <br>";
            var_dump($_SESSION);
            // echo "<form action=\"sesstion_cart.php\" method=\"post\">";
            // echo "<table>";
            // echo "<tr><th>Item</th><th>Quality</th></tr>";
            // // foreach ($_SESSION['cart'] as $key => $value) {
            // //     echo "<tr><td>$key</td><td>$value</td>";
            // //     echo "<td><input type=\"submit\" name=\"key\" value=\"Remove\></td></tr>";
            // // }
            // echo "</table>";
            // echo "</form>";
        ?>
            <form action="sesstion_cart.php" method="post">
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Quality</th>
                    </tr>
                    <?php
                    foreach ($_SESSION['cart'] as $key => $value) {

                    ?>
                        <tr>
                            <td><?php echo $key; ?></td>
                            <td><?php echo $value; ?></td>
                            <td><input type="submit" name="<?php echo $key; ?>" value="Remove"></td>
                        </tr>

                    <?php
                    }
                    ?>

                </table>
            </form>
        <?php
        }
        ?>
    </fieldset>
</body>

</html>