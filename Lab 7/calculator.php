<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<main>
    <h3>Calculator in PHP</h3>

    <form method="post">
        <input type="number" name="operand1" placeholder="Enter the first number" required>
        <input type="number" name="operand2" placeholder="Enter the second number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="exponentiate">^</option>
        </select>
        <button type="submit">=</button>
    </form>

    <?php
    function is_prime($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operand1 = $_POST['operand1'];
        $operand2 = $_POST['operand2'];
        $operator = $_POST['operator'];
        $result = 0;

        switch ($operator) {
            case "add":
                $result = $operand1 + $operand2;
                break;
            case "subtract":
                $result = $operand1 - $operand2;
                break;
            case "multiply":
                $result = $operand1 * $operand2;
                break;
            case "divide":
                if ($operand2 != 0) {
                    $result = $operand1 / $operand2;
                } else {
                    echo "Cannot divide by zero!";
                    exit;
                }
                break;
            case "exponentiate":
                $result = pow($operand1, $operand2);
                break;
        }

        echo "<p>Result: $result</p>";
        echo "<p>" . ($result % 2 == 0 ? "Even" : "Odd") . "</p>";
        echo "<p>" . (is_prime($result) ? "Prime" : "Not Prime") . "</p>";
    }
    ?>
</main>

<?php include 'footer.php'; ?>
