<?php include 'Header.php'; ?>
<?php include 'Menu.php'; ?>

<form action="NameForm.php" method="POST">
    First Name: <input type="text" name="firstName"><br><br>
    Middle Name: <input type="text" name="middleName"><br><br>
    Last Name: <input type="text" name="lastName"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $hour = date("H");

    if (empty($firstName) && empty($middleName) && empty($lastName)) {
        echo "You did not supply any names.";
    } else {
        $greeting = $hour < 12 ? "Good morning" : "Good day";
        if (!empty($firstName) && empty($middleName) && empty($lastName)) {
            echo "$greeting $firstName! You did not provide middle and last name.";
        } elseif (!empty($firstName) && !empty($lastName) && empty($middleName)) {
            echo "$greeting $firstName $lastName! You did not provide middle name.";
        } elseif (!empty($firstName) && !empty($middleName) && !empty($lastName)) {
            echo "$greeting $firstName $middleName $lastName! Your middle name is very unique.";
        } else {
            echo "$greeting, Welcome to the World of PHP.";
        }
    }
}
?>

<?php include 'Footer.php'; ?>

