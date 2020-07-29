<?php
session_start();


?>

<html>
<table border="1" style="width: 100%; border: 1px solid;">
  <tr>
    <th width="100px"><img src="logo.png" /></th>
    <th width="auto"></th>
    <th width="200px">
      <a href="">loggedin as
        <?php echo $_SESSION['userName'];   ?>| </a><a href="">logout </a>
    </th>
  </tr>

  <tr>
    <td>
      <h3>Account</h3>
      <hr />
      <ul>
        <li><a href="logged_in_dash.php">Dashboard</a></li>
        <li><a href="view_profile.php">View Profile</a></li>
        <li><a href="edit_profile.php">Edit Profile</a></li>
        <li><a href="">Change Profile Picture</a></li>
        <li><a href="change_password.php">Change password</a></li>
        <li><a href="login.html">Logout</a></li>
      </ul>
    </td>
    <td>
      <h1>Welcome <?php echo $_SESSION['userName'];   ?></h1>
    </td>
  </tr>

  <tr>
    <td></td>
    <td align="center">copyright &copy; 2017</td>
    <td></td>
  </tr>
</table>

</html>