<?php
require_once('db.php');

$id           = $_POST['id'];
$password     = $_POST['password'];

if (empty($id) || empty($password)) {
    echo "null submission found!";
} else {
    $con = dbConnection();
    $sql = "select * from users where id='{$id}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (count($row) > 0) {
        echo "login Successful!";
    } else {
        echo "login failed!";;
    }
}
