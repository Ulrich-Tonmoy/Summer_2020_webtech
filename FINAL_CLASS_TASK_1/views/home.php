<?php
require_once('../php/sessionController.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
</head>

<body>
	<h1>Welcome home <?= $_SESSION['username'] ?></h1>
	<form action="user_list.php" method="POST">
		<a href="create.php"> Create New User</a> |
		<a href="create_product.php"> Create New Product</a> |
		<a href="" onclick="f1()"> User List</a> |
		<a href="../php/logoutController.php"> logout</a>
	</form>

	<br>
	<br>
	<div id="list"></div>

	<script type="text/javascript">
		function f1() {
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', 'user_list.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('list').innerHTML = this.responseText;
				}
			}
			alert(this.responseText);

		}
	</script>
</body>

</html>