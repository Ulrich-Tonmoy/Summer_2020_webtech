<!DOCTYPE html>
<html>

<head>
	<title>Login page</title>
</head>

<body>

	<h1>Login page</h1>

	<form action="../php/loginController.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input id="name" type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input id="password" type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">

	</script>
</body>

</html>