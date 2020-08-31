<?php
require_once('../service/productService.php');

//create new user
if (isset($_POST['create'])) {
    $product_id     = $_POST['product_id'];
    $name           = $_POST['name'];
    $description    = $_POST['description'];
    $quantity       = $_POST['quantity'];
    $date           = $_POST['date'];
    $price          = $_POST['price'];
    $status         = $_POST['status'];

    $filedir = '../upload/' . time() . '.png';
    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $filedir)) {
        $product_img = $_POST['img'];
    }
    if (empty($username) || empty($password) || empty($email)) {
        header('location: ../views/create.php?error=null');
    } else {
        $product = [
            'product_id'    => $product_id,
            'name'          => $name,
            'description'   => $description,
            'quantity'      => $quantity,
            'date'          => $date,
            'price'         => $price,
            'status'        => $status,
            'product_img'   => $product_img,
        ];
        $status = create($product);
        if ($status) {
            header('location: ../views/user_list.php?msg=success');
        } else {
            header('location: ../views/create.php?error=dberror');
        }
    }
}
