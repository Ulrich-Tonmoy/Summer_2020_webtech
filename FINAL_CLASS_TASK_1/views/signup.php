<!DOCTYPE html>
<html>

<head>
	<title>Signup page</title>
</head>

<body>
	<form action="../php/signupController.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
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

			xhttp.open('POST', 'abc.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('username=' + name + 'email' + email + 'password=' + password);
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('suc').innerHTML = "Successful";

				}
			}

			document.getElementsByTagName('a')[0].style.display = "inline";
		}
	</script>
</body>

</html>