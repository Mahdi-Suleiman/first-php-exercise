<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exercise 3</title>
</head>

<body>
    <hr>
    <h2>ex 1</h2>
    <?php
    $year = 2013;
    echo "input: $year <br/>";
    $stringToTime = strtotime("$year-01-01");
    echo date("L", $stringToTime) ? "Leap year" : "Not a Leap year";
    ?>

    <hr>
    <h2>ex 2</h2>
    <?php
    $temperature = 27;
    echo "input: $temperature <br/>";

    echo ($temperature > 20) ? "Summer time!" : "Winter time :(";
    ?>

    <hr>
    <h2>ex 3</h2>
    <?php
    $int1 = 2;
    $int2 = 3;
    echo "input: $int1, $int2 <br/>";
    echo ($int1 === $int2) ? "( $int1 + $int2 ) * 3 = " . (($int1 * $int1) * 3) : "( $int1 + $int2 ) = " . $int1 + $int2;
    ?>

    <hr>
    <h2>ex 4</h2>
    <?php
    $int1 = 15;
    $int2 = 15;
    echo "input: $int1, $int2 <br/>";
    echo ($int1 + $int2 === 30) ? $int1 + $int2 : "false";
    ?>

    <hr>
    <h2>ex 5</h2>
    <?php
    $number = -21;
    $isPositive = ($number > 0) ? $number : false;
    echo "input: $number<br/>";
    echo ($isPositive != false && $isPositive % 3 === 0) ? "true" : "false";
    ?>

    <hr>
    <h2>ex 6</h2>
    <?php
    $input = 50;
    echo "input: $input<br/>";
    echo ($input >= 20 && $input <= 50) ? "true" : "false";

    ?>

    <hr>
    <h2>ex 7</h2>
    <?php
    $input = [1, 5, 9];
    echo max($input)
    ?>

    <hr>
    <h2>ex 8</h2>
    <?php
    $input = 300;
    $result = 0;
    echo "input: $input<br/>";

    if ($input <= 50) {
        $result += $input * 2.5;
    } elseif ($input > 50 && $input <= 150) {
        $result = $result + 50 * 2.5 +  $input * 5;
    } elseif ($input > 150 && $input <= 250) {
        $result = $result + 50 * 2.5 + 150 * 5 + $input * 6.2;
    } else {
        $result = $result + 50 * 2.5 + 100 * 5 + 100 * 6.2 + $input * 7.5;
    }

    echo "Output: $result";
    ?>

    <hr>
    <h2>ex 9</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="get">
        <label>input 1:
            <input type="text" name="num1">
        </label>
        <label>input 2:
            <input type="text" name="num2">
        </label>
        <select name="operation" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" name="ex9">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["ex9"])) {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $operation = $_GET["operation"];

            switch ($operation) {
                case '+':
                    echo $num1 + $num2;
                    break;

                case '-':
                    echo $num1 - $num2;
                    break;

                case '*':
                    echo $num1 * $num2;
                    break;

                case '/':
                    echo $num1 / $num2;
                    break;

                default:
                    break;
            }
        }
    }
    ?>

    <hr>
    <h2>ex 10</h2>
    <?php
    $age = 15;
    echo "input: $age<br/>";
    echo ($age < 18) ? "not eligible to vote" : "eligible to vote";
    ?>

    <hr>
    <h2>ex 11</h2>
    <?php
    $temperature = -60;
    echo "input: $temperature<br/>";
    echo ($temperature < 0) ? "Negative" : (($temperature == 0) ? "zero" : (($temperature > 0) ? "positive" : "null"));
    ?>

    <hr>
    <h2>ex 12</h2>
    <?php
    $grades = [60.86, 95, 63, 55, 74, 79, 62, 50];
    $average = array_sum($grades) / count($grades);
    if ($average < 60) {
        echo "fialed";
    } elseif ($average >= 60) {
        echo "D";
    } elseif ($average >= 70) {
        echo "C";
    } elseif ($average >= 80) {
        echo "B";
    } elseif ($average >= 90 && $average <= 100) {
        echo "A";
    }
    ?>
</body>

</html>