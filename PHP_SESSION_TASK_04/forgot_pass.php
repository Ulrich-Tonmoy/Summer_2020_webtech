<?php
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    if (empty($email)){
        echo "null submission found!";
    }else {
        if (isset($_SESSION['email'])){
            if ($email == $_SESSION['email']) {
                echo $_SESSION['password'];
            } else {
                echo "don't have any account!";
            }
        } else {
            echo "don't have any account!";
        }
    }
}
