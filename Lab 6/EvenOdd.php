<?php include 'Header.php'; ?>
<?php include 'Menu.php'; ?>

<?php
for ($i = 99; $i > 0; $i--) {
    if ($i % 2 == 0) {
        echo "$i bottles of beer can serve even number of guests<br>";
    } else {
        echo "$i bottles of beer can serve odd number of guests<br>";
    }
}
echo "1 bottle of beer can serve ONLY ONE guest.";
?>

<?php include 'Footer.php'; ?>

