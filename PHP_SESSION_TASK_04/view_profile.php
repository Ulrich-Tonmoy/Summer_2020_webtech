<?php
session_start();

?>

<html>
<table border="1" style="width:100% ; border:1px solid;">
    <tr>
        <th width="100px"><img src="logo.png"></th>
        <th width="auto"></th>
        <th width="200px"><a href="">loggedin as <?php echo $_SESSION['userName'];     ?>| </a><a href="">logout </a></th>
    </tr>

    <tr>

        <td>
            <h3>Account</h3>
            <hr>
            <ul>
                <li><a href="logged_in_dash.php">Dashboard</a></li>
                <li><a href="view_profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change password</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </td>

        <td height="400px">
            <fieldset>
                <legend><b>PROFILE</b></legend>
                <img src="user.png" width="60px">
                <li><a href="">Change</a></li>
                <h6>Name : <?php echo $_SESSION['name']; ?> </h6>
                <hr>
                <h6>Email : <?php echo $_SESSION['email']; ?></h6>
                <hr>
                <h6>Gender : <?php echo $_SESSION['gender']; ?></h6>
                <hr>
                <h6>Dob : <?php echo $_SESSION['dob']; ?></h6>
                <hr>

                <a href="edit_profile.php">Edit Profile</a>

            </fieldset>

        </td>
        <td></td>
    </tr>

    <tr>
        <td></td>
        <td align="center">copyright &copy; 2017</td>
        <td></td>
    </tr>
</table>

</html>