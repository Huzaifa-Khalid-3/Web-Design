<?php
session_start();
include 'Header.php';
include 'Menu.php';
?>

<div id="content">
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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['telephone'] = $_POST['telephone'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['birthday'] = $_POST['birthday'];
    $_SESSION['occupation'] = $_POST['occupation'];
    $_SESSION['sport'] = $_POST['sport'];
    header("Location: Session2.php");
    exit();
}
include 'Footer.php';
?>
