<?php include 'Header.php'; ?>
<?php include 'Menu.php'; ?>

<div id="content">
    <div style="float: left; width: 50%;">
        <form method="post" action="">
            <label>First Name:</label>
            <input type="text" name="first_name"><br>
            <label>Last Name:</label>
            <input type="text" name="last_name"><br>
            <label>Telephone Number:</label>
            <input type="number" name="telephone"><br>
            <label>Email:</label>
            <input type="email" name="email"><br>
            <label>Birth Day:</label>
            <input type="date" name="birthday"><br>
            <label>Occupation:</label><br>
            <input type="radio" name="occupation" value="Student"> Student<br>
            <input type="radio" name="occupation" value="Doctor"> Doctor<br>
            <input type="radio" name="occupation" value="Farmer"> Farmer<br>
            <input type="radio" name="occupation" value="Engineer"> Engineer<br>
            <label>Favorite Sport:</label>
            <select name="sport">
                <option value="Hockey">Hockey</option>
                <option value="Football">Football</option>
                <option value="Curling">Curling</option>
                <option value="Tennis">Tennis</option>
            </select><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div style="float: right; width: 50%;">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h3>Submitted Information</h3>";
            echo "First Name: " . $_POST['first_name'] . "<br>";
            echo "Last Name: " . $_POST['last_name'] . "<br>";
            echo "Telephone Number: " . $_POST['telephone'] . "<br>";
            echo "Email: " . $_POST['email'] . "<br>";
            echo "Birth Day: " . $_POST['birthday'] . "<br>";
            echo "Occupation: " . $_POST['occupation'] . "<br>";
            echo "Favorite Sport: " . $_POST['sport'] . "<br>";
        }
        ?>
    </div>
</div>

<?php include 'Footer.php'; ?>
