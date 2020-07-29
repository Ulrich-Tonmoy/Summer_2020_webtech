<?php
session_start();
if (isset($_POST['submit'])) {
    $name             = $_POST['name'];
    $email            = $_POST['email'];
    $username         = $_POST['userName'];
    $password         = $_POST['password'];
    $confirmPassword  = $_POST['confirmPassword'];

    if (empty($uname) || empty($username) || empty($password) || empty($confirmPassword) || empty($email)) {
        echo "null submission found!";
    } else {
        $_SESSION['uname']         = $uname;
        $_SESSION['email']         = $email;
        $_SESSION['userName']      = $username;
        $_SESSION['password']     = $password;
        $_SESSION['confirmpassword']     = $confirmPassword;

        echo "done!";
    }
} else {
    header('location: login.html');
}
