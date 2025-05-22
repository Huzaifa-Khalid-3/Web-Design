<?php include 'Header.php'; ?>
<?php include 'Menu.php'; ?>

<?php
for ($i = 90; $i >= 0; $i -= 10) {
    if ($i > 0) {
        echo "$i bottles of beer on the wall...<br>";
        echo "$i bottles of beer...<br>";
        echo "You take 10 down you pass them around ...<br>";
        echo ($i-10) . " bottles of beer on the wall.<br><br>";
    } else {
        echo "There are only 10 bottles left.<br>";
        echo "You take them down you pass them around ...<br>";
        echo "0 bottle of beer on the wall.<br><br>";
        echo "There are no more bottles of beer.";
    }
}
?>

<?php include 'Footer.php'; ?>

