<?php
session_start();

if (isset($_POST['submit'])) {

    $uname         = $_POST['uname'];
    $password     = $_POST['password'];

    if (empty($uname) || empty($password)) {
        echo "null submission found!";
    } else {
        if (isset($_SESSION['uname']) && isset($_SESSION['password'])) {
            if ($uname == $_SESSION['uname'] && $password == $_SESSION['password']) {
                $_SESSION['status'] = "OK";
                header('location: home.html');
            } else {
                header('location: login.html?msg=invalid_username/password');
            }
        } else {
            echo "don't have any account!";
        }
    }
} else {
    header('location: login.html');
}
