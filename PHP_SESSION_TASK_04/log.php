<?php
session_start();

if (isset($_POST['submit'])) {

    $name         = $_POST['name'];
    $password     = $_POST['password'];

    if (empty($name) || empty($password)) {
        echo "null submission found!";
    } else {
        if (isset($_SESSION['name']) && isset($_SESSION['password'])) {
            if ($name == $_SESSION['name'] && $password == $_SESSION['password']) {
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
