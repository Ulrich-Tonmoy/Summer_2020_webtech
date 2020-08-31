<?php
require_once('../service/userService.php');


$name 		= $_POST['name'];
$password 	= $_POST['password'];
$email 		= $_POST['email'];

if (empty($name) || empty($password) || empty($email)) {
	header('location: ../views/signup.php?error=null');
} else {

	$user = [
		'name'	=> $name,
		'password'	=> $password,
		'email'		=> $email
	];

	$status = create($user);
}
