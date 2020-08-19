<?php

require_once('../php/sessionController.php');
require_once('../service/userService.php');


$user = getById($_GET['id']);

if (isset($_GET['error'])) {
    if ($_GET['error'] == 'dberror') {
        echo "something wrong ...please try again.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete User</title>
</head>

<body>
    <form action="../php/userController.php" method="post">
        <fieldset>
            <legend>Delete User</legend>
            <table>
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username" value="<?= $user['username'] ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?= $user['password'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?= $user['email'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <p>Are you sure you want to delete your account?</p>
                        <input type="submit" name="delete" value="delete">
                        <a href="user_list.php">Cancel</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>