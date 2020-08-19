<?php

require_once('../php/sessionController.php');

if (isset($_GET['error'])) {
    if ($_GET['error'] == 'dberror') {
        echo "something wrong ...please try again.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Create Product</title>
</head>

<body>
    <form action="../php/productController.php" method="post">
        <fieldset>
            <legend>Create New Product</legend>
            <table>
                <tr>
                    <td>Product_Id</td>
                    <td><input type="text" name="product_id"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="description"></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="text" name="quantity"></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="img"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="create" value="Create">
                        <a href="home.php">Back</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>