<?php

require_once('../db/db.php');

function create($product)
{
    $con = dbConnection();
    $sql = "insert into product values('{$product['product_id']}', '{$product['name']}', '{$product['description']}', '{$product['quantity']}', '{$product['date']}', '{$product['price']}', '{$product['status']}', '{$product['product_img']}')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
