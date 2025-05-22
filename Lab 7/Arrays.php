<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<main>
    <h3>Arrays in PHP</h3>

    <?php
    // Sub-Task 1
    $noKeyArray = ["apple", "banana", "cherry"];
    echo '<h4>No Key Array</h4>';
    var_dump($noKeyArray);

    foreach ($noKeyArray as $key => $value) {
        echo "Key: $key, Value: $value, Key Type: " . gettype($key) . "<br>";
    }

    // Sub-Task 2
    $stringKeyArray = ["first" => "apple", "second" => "banana", "third" => "cherry"];
    echo '<h4>String Key Array</h4>';
    var_dump($stringKeyArray);

    foreach ($stringKeyArray as $key => $value) {
        echo "Key: $key, Value: $value, Key Type: " . gettype($key) . "<br>";
    }

    // Sub-Task 3
    $intKeyArray = [1 => "apple", 2 => "banana", 3 => "cherry"];
    echo '<h4>Int Key Array</h4>';
    var_dump($intKeyArray);

    foreach ($intKeyArray as $key => $value) {
        echo "Key: $key, Value: $value, Key Type: " . gettype($key) . "<br>";
    }

    // Sub-Task 4
    $mixedKeyArray = ["first" => "apple", 2 => "banana", "third" => "cherry"];
    echo '<h4>Mixed Key Array</h4>';
    var_dump($mixedKeyArray);

    foreach ($mixedKeyArray as $key => $value) {
        echo "Key: $key, Value: $value, Key Type: " . gettype($key) . "<br>";
    }

    // Sub-Task 5
    $multiDimensionArray = [
        ["apple", "banana"],
        ["cherry", "date"]
    ];
    echo '<h4>Multi-Dimensional Array</h4>';
    var_dump($multiDimensionArray);

    foreach ($multiDimensionArray as $key1 => $subArray) {
        foreach ($subArray as $key2 => $value) {
            echo "Key1: $key1, Key2: $key2, Value: $value, Key1 Type: " . gettype($key1) . ", Key2 Type: " . gettype($key2) . "<br>";
        }
    }
    ?>
</main>

<?php include 'footer.php'; ?>
