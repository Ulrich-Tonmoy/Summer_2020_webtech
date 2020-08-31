<?php
require_once('../service/userService.php');


$name 		= $_POST['name'];
$password 	= $_POST['password'];
$email 		= $_POST['email'];

$user = [
	'name'		=> $name,
	'password'	=> $password,
	'email'		=> $email
];

$status = create($user);
