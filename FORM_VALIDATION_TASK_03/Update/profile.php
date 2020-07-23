<html>
<form method="POST">
    <table width="600px" height="700px" border="1">
        <tr height="100px">
            <td colspan="3" align="center">
                <h1>PERSON PROFILE</h1>
            </td>
        </tr>
        <tr height="50px">
            <td width="50px">Name</td>
            <td width="100px">
                <input type="text" name="name" pattern="[A-Za-z]+[A-Za-z.-]{2,}" title="Contains at least two words Can contain a-z or A-Z or dot(.) or dash(-) Must start with a letter" />
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST['name'];
                    if (isset($_POST['submit']) && $name == "") {
                        echo "can not be empty";
                    }
                }
                ?>
            </td>
            <td width="20px"></td>
        </tr>
        <tr height="50px">
            <td width="50px">Email</td>
            <td width="100px">
                <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$" title="hint: sample@gmail.com" />
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = $_POST['email'];
                    if (isset($_POST['submit']) && $email == "") {
                        echo "can not be empty";
                    }
                }
                ?>
            </td>
            <td width="20px"></td>
        </tr>
        <tr height="50px">
            <td width="50px">Gender</td>
            <td width="100px">
                <input type="radio" name="gender" /> Male
                <input type="radio" name="gender" /> Female
                <input type="radio" name="gender" /> Others
                <br>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['submit']) && !isset($_POST['gender'])) {
                        echo "(at least one of them has to be selected)";
                    }
                }
                ?>
            </td>
            <td width="20px"></td>
        <tr height="50px">
            <td width="50px">Date of Birth</td>
            <td width="100px">
                <input type="date" name="date" />
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['submit']) && empty($_POST['date'])) {
                        echo "can not be empty";
                    }
                }
                ?>
            </td>
            <td width="20px"></td>
        </tr>
        <tr height="50px">
            <td width="50px">Blood Group</td>
            <td width="100px">
                <select>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </td>
            <td width="20px"></td>
        </tr>
        <tr height="50px">
            <td width="50px">Degree</td>
            <td width="100px">
                <input type="checkbox" name="degree" /> SSC
                <input type="checkbox" name="degree" /> HSC
                <input type="checkbox" name="degree" /> BSc.
                <input type="checkbox" name="degree" /> MSc.
                <br>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['submit']) && empty($_POST['degree'])) {
                        echo "At least one of them has to be selected";
                    }
                }
                ?>
            </td>
            <td width="20px"></td>
        </tr>
        <tr height="50px">
            <td width="50px">Photo</td>
            <td width="100px">
                <input type="file" name="image" id="">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['submit']) && empty($_POST['image'])) {
                        echo "Picture cannot be empty";
                    }
                }
                ?>
            </td>
            <td width="20px"></td>
        </tr>
        <tr height="50px">
            <td colspan="3"></td>
        </tr>
        <tr height="50px">
            <td align="right" colspan="3">
                <button type="submit" name="submit">Submit</button>
                <button type="reset">Reset</button>
            </td>
        </tr>
        </tr>
    </table>
</form>

</html>