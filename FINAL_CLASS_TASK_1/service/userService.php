<?php

require_once('../db/db.php');

function getById($id)
{
	$con = dbConnection();
	$sql = "select * from user where id='{$id}'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

function getAllUser()
{
	$con = dbConnection();
	$sql = "select * from user";
	$result = mysqli_query($con, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	};
	return $users;
}

function validate($user)
{
	$con = dbConnection();
	$sql = "select * from user where name='{$user['username']}' and password='{$user['password']}'";

	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);

	if (count($row) > 0) {
		return true;
	} else {
		return false;
	}
}

function create($user)
{
	$con = dbConnection();
	$sql = "insert into user values('', '{$user['name']}', '{$user['email']}', '{$user['password']}')";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}

function update($user)
{
	$con = dbConnection();
	$sql = "update user set name='{$user['username']}', email='{$user['email']}', password='{$user['password']}' where id={$user['id']}";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}

function delete($user)
{
	$con = dbConnection();
	$sql = "delete from user where id={$user['id']}";

	if (mysqli_query($con, $sql)) {
		return true;
	} else {
		return false;
	}
}
