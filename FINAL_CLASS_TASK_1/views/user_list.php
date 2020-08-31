<?php

$con = mysqli_connect('localhost', 'root', '', 'webtech');
$sql = "select * from user";

$result = mysqli_query($con, $sql);

$data = "<table border=1>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Email</td>
					<td>Password</td>
					<td>Action</td>
				</tr>";

while ($row = mysqli_fetch_assoc($result)) {
	$data .= "<tr>
					<td>{$row['id']}</td>
					<td>{$row['name']}</td>
					<td>{$row['email']}</td>
					<td>{$row['password']}</td>
					<td>
						<a href=> Edit</a> |
						<a href=> Delete</a>
					</td>
				</tr>";
}
$data .= "</table>";

echo $data;
