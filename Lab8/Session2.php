<?php
session_start();
include 'Header.php';
include 'Menu.php';
?>

<div id="content">
    <h3>Submitted Information from Session</h3>
    <?php
    if (isset($_SESSION['first_name'])) {
        echo "First Name: " . $_SESSION['first_name'] . "<br>";
        echo "Last Name: " . $_SESSION['last_name'] . "<br>";
        echo "Telephone Number: " . $_SESSION['telephone'] . "<br>";
        echo "Email: " . $_SESSION['email'] . "<br>";
        echo "Birth Day: " . $_SESSION['birthday'] . "<br>";
        echo "Occupation: " . $_SESSION['occupation'] . "<br>";
        echo "Favorite Sport: " . $_SESSION['sport'] . "<br>";
    } else {
        echo "No data found in session.";
    }
    ?>
</div>

<?php include 'Footer.php'; ?>
