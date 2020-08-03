<?php
session_start();
if (isset($_POST['submit'])) {
    $id               = $_POST['id'];
    $name             = $_POST['name'];
    $email            = $_POST['email'];
    $password         = $_POST['password'];
    $confirmPassword  = $_POST['confirmPassword'];
    $userType         = $_POST['userType'];

    if (empty($name) || empty($password) || empty($confirmPassword) || empty($email) || empty($id) || empty($userType)) {
        echo "null submission found!";
    } else {

        $_SESSION['id']         = $id;
        $_SESSION['name']       = $name;
        $_SESSION['email']      = $email;
        $_SESSION['password']   = $password;
        $_SESSION['userType']   = $userType;

        $file = fopen('data.txt', 'a');
        $data = $id . "|" . $name . "|" . $password . "|" . $email . "|" . $userType . "\r\n";
        fwrite($file, $data);
        fclose($file);

        echo "done!";
    }
} else {
    header('location: login.html');
}
