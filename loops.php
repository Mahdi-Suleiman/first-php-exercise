<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        padding: 3px;
        border: 1px solid black;
    }
    </style>
    <title>PHP exercise 4</title>
</head>

<body>
    <?php

    //1
    echo "<h1>1</h1>";
    echo "<p>";
    for ($i = 1; $i < 11; $i++) {
        if ($i === 10)
            echo $i;
        else
            echo $i . "-";
    }
    echo "</p>";

    //2
    echo "<h1>2</h1>";
    $sum = 0;
    for ($i = 0; $i <= 30; $i++) {
        $sum += $i;
    }
    echo "<p>total = $sum</p>";

    //3
    echo "<h1>3</h1>";
    $str3 = 'A';
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 5 - $i; $j > 0; $j--)
            echo "A ";
        for ($k = 1; $k <= $i; $k++)
            echo "$str3 ";
        echo "<br>";
        $str3++;
    }

    //4
    echo "<h1>4</h1>";
    $str3 = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 5 - $i; $j > 0; $j--)
            echo "1 ";
        for ($k = 1; $k <= $i; $k++)
            echo "$str3 ";
        echo "<br>";
        $str3++;
    }

    //5
    echo "<h1>5</h1>";
    $num5 = 1;
    for ($i = 0; $i < 5; $i++) {
        echo "<p>";
        for ($j = 0; $j < 5; $j++) {
            if ($j === $i) {
                echo "$num5 ";
                $num5++;
            } else
                echo "0 ";
        }
        echo "</p>";
    }

    //6
    echo "<h1>6</h1>";
    $num6 = 5;
    $result6 = 1;
    for ($i = $num6; $i > 0; $i--) {
        $result6 *= $i;
    }
    echo "<p>Factorial for $num6 = $result6</p>";

    //7
    echo "<h1>7</h1>";
    $f1 = 0;
    $f2 = 1;
    $max7 = 8;
    echo "<p>";
    echo $f1;
    echo '<br/>';
    echo $f2;
    for ($i = 1; $i <= $max7; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo $f3 . "<br>";
    }
    echo "</p>";

    //8
    echo "<h1>8</h1>";
    $str8 = "orange coding academy";
    echo substr_count($str8, 'c');

    //9
    echo "<h1>9</h1>";
    echo "<table><tbody>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td> $i * $j = " . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";

    //10
    echo "<h1>10</h1>";
    $num10 = range(1, 50);
    echo "<p>";
    foreach ($num10 as $val) {
        if ($val % 3 === 0) echo "Fizz ";
        else echo $val . " ";
    }
    echo "</p>";

    //11
    echo "<h1>11</h1>";
    $num11 = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$num11 ";
            $num11++;
        }
        echo "<br>";
    }
    //12
    echo "<h1>12</h1>";
    for ($i = 1; $i <= 5; $i++) {
        $str12 = 'A';
        for ($j = 1; $j <= $i; $j++) {
            echo "$str12 ";
            $str12++;
        }
        echo "<br>";
        if ($i === 5) {
            for ($k = 4; $k > 0; $k--) {
                $str12 = 'A';
                for ($z = 1; $z <= $k; $z++) {
                    echo "$str12 ";
                    $str12++;
                }
                echo "<br>";
            }
        }
    }






    ?>
</body>

</html>