<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include 'Header.php';
include 'Menu.php';
?>

<div class="content">
    <?php
    // Declare variables
    $firstName = "Huzaifa";
    $lastName = "Khalid";
    define("STUDENT_NUMBER", "041115857");

    // Concatenated string
    $helloWorld = "Hello World!!";
    $phpMessage = " This is the first time I am using PHP!!";
    $fullMessage = $helloWorld . $phpMessage;

    // String length
    $messageLength = strlen($fullMessage);

    // Position of "PHP"
    $phpPosition = strpos($fullMessage, "PHP");

    echo "<p>First Name: $firstName</p>";
    echo "<p>Last Name: $lastName</p>";
    echo "<p>Student Number: " . STUDENT_NUMBER . "</p>";
    echo "<p>$fullMessage</p>";
    echo "<p>Length of the message: $messageLength characters</p>";
    echo "<p>Position of 'PHP': $phpPosition</p>";
    ?>
</div>

<?php include 'Footer.php'; ?>

</body>
</html>

