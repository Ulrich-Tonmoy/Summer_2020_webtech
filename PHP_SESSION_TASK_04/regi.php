<?php
session_start();
if (isset($_POST['submit'])) {
    $name             = $_POST['name'];
    $email            = $_POST['email'];
    $username         = $_POST['userName'];
    $password         = $_POST['password'];
    $confirmPassword  = $_POST['confirmPassword'];
    $gender           = $_POST['gender'];
    $dob              = $_POST['dob'];

    if (empty($name) || empty($username) || empty($password) || empty($confirmPassword) || empty($email)) {
        echo "null submission found!";
    } else {

        $_SESSION['name']       = $name;
        $_SESSION['email']      = $email;
        $_SESSION['userName']   = $username;
        $_SESSION['password']   = $password;
        $_SESSION['gender']     = $gender;
        $_SESSION['dob']        = $dob;

        echo "done!";
    }
} else {
    header('location: login.html');
}
