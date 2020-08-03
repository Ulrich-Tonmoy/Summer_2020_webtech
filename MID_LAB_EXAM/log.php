<?php
session_start();

if (isset($_POST['submit'])) {

    $id         = $_POST['id'];
    $password     = $_POST['password'];

    if (empty($id) || empty($password)) {
        echo "null submission found!";
    } else {
        $file  = fopen('data.txt', 'r');
        $data  = fread($file, filesize('data.txt'));
        fclose($data);

        $user = explode('|', $data);

        if ($id == trim($user[0]) && $password == trim($user[2])) {
            if (trim($user[4]) == "User") {
                header('location: user_login.php');
            } else if (trim($user[4]) == "Admin") {
                header('location: admin_login.php');
            }
        } else {
            header('location: login.php?msg=invalid_id/password');
        }
    }
} else {
    header('location: login.html');
}
