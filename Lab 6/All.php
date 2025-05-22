<?php include 'Header.php'; ?>
<?php include 'Menu.php'; ?>

<?php
for ($i = 99; $i > 0; $i--) {
    echo "$i bottles of beer on the wall...<br>";
    echo "You take one down you pass it around ...<br>";
    echo ($i-1) . " bottles of beer on the wall.<br><br>";
}
echo "There are no more bottles of beer.";
?>

<?php include 'Footer.php'; ?>

