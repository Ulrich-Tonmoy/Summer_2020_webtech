<?php
require_once('db.php');

$id               = $_POST['id'];
$name             = $_POST['name'];
$email            = $_POST['email'];
$password         = $_POST['password'];
$confirmPassword  = $_POST['confirmPassword'];
$userType         = $_POST['userType'];

if (empty($name) || empty($password) || empty($confirmPassword) || empty($email) || empty($id) || empty($userType)) {
    echo "null submission found!";
} else {
    $con = dbConnection();
    $sql = "insert into users values('{$id}', '{$name}', '{$password}', '{$email}', '{$userType}')";
    if (mysqli_query($con, $sql)) {
        echo "done!";
    } else {
        echo "failed!";;
    }
}
