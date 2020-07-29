<?php
session_start();
if (isset($_POST['submit'])) {
    $old = $_POST['oldpass'];
    $new = $_POST['newpass'];
    $con = $_POST['conpass'];
    if (empty($old) || empty($new) || empty($con)) {
        echo "null submission found!";
    } else {
        if ($_SESSION['password'] == $old && $new == $con) {
            $_SESSION = $new;
            echo "password changed";
        } else {
            header('location: change_password.php');
        }
    }
}
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
                <li><a href="change_password.html">Change password</a></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </td>
        <td>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Old Password</td>
                        <td>:</td>
                        <td><input name="oldpass" type="password" /></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td>:</td>
                        <td><input name="newpass" type="password" /></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>:</td>
                        <td><input name="conpass" type="password" /></td>
                    </tr>
                </table>
                <hr />
                <input name="submit" type="submit" value="Submit" />
            </form>
        </td>
    </tr>

    <tr>
        <td></td>
        <td align="center">copyright &copy; 2017</td>
        <td></td>
    </tr>
</table>

</html>