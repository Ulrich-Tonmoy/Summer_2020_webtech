<!DOCTYPE html>
<html>

<head>
	<title>Signup page</title>
</head>

<body>
	<form action="../php/signupController.php" method="POST">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input id="name" type="text" name="name"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input id="password" type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input id="email" type="email" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" name="submit" value="Submit" onclick="f1()">
						<a href="login.php" style="display: none">login</a>
					</td>
				</tr>
				<tr>
					<td id="suc"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		function f1() {
			var name = document.getElementById('name').value;
			var password = document.getElementById('password').value;
			var email = document.getElementById('email').value;
			var xhttp = new XMLHttpRequest();

			xhttp.open('POST', '../php/signupController.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send("name=" + name + "&email=" + email + "&password=" + password);
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('suc').innerHTML = "Successfully Registered!";

				}
			}
			document.getElementsByTagName('a')[0].style.display = "inline";
		}
	</script>
</body>

</html>