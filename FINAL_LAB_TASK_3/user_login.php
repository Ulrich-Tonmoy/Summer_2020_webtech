<?php
require_once('db.php');
session_start();

$id           = $_SESSION['id'];
$password     = $_SESSION['password'];

$con = dbConnection();
$sql = "select * from users where id='{$id}' and password='{$password}'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$name       = $row['name'];

?>

<html>
<table border="1" style="width: 100%; border: 1px solid;">
    <tr>
        <td>
            <h1>Welcome <?php echo $name   ?>!</h1>
        </td>
    </tr>
    <tr>
        <td>
            <a href="view_profile.php">Profile</a> <br>
            <a href="change_password.php"> Change Password</a> <br>
            <a href="logout.php">Logout</a>
        </td>
    </tr>
</table>

</html>