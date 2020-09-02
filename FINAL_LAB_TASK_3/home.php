<?php
require_once('db.php');
session_start();

$id           = $_SESSION['id'];
$password     = $_SESSION['password'];


$con = dbConnection();
$sql = "select * from users where id='{$id}' and password='{$password}'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['userType'] == "User") {
    header("Location: user_login.php");
} else {
    header("Location: admin_login.php");
}
