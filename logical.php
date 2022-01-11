<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exercise 3</title>
</head>

<body>
    <?php

    //1 
    echo "<h1>1</h1>";
    $year = 2013;
    $date = new DateTime("$year-01-01");
    $date = $date->format('L');
    echo $date == '0' ? "<p>This year is not a leap year." : "Leap Year!";

    //2
    echo "<h1>2</h1>";
    $temp = 20;
    echo "<p>temp = $temp</p>";
    if ($temp < 20)
        echo "<p>It is winter time!";
    else
        echo "<p>It is summer time!";

    //3
    echo "<h1>3</h1>";
    $num3_1 = 5;
    $num3_2 = 3;
    if ($num3_1 === $num3_2)
        $result3 = ($num3_1 + $num3_2) * 3;
    else
        $result3 = $num3_1 + $num3_2;
    echo "<p>sum = $result3</p>";

    //4
    echo "<h1>4</h1>";
    $num4_1 = 5;
    $num4_2 = 10;
    $result4 = $num4_1 + $num4_2;
    $result4 = $result4 === 30 ? 30 : "false";
    echo "<p>sum = $result4</p>";

    //5
    echo "<h1>5</h1>";
    $num5 = 20;
    if ($num5 >= 0) {
        if ($num5 % 3 === 0)
            echo "<p>True</p>";
        else
            echo "<p>False</p>";
    } else {
        echo "<p>Negative Number!</p>";
    }

    //6
    echo "<h1>6</h1>";
    $range = range(20, 50);
    $num6 = 50;
    if (array_search($num6, $range) || array_search($num6, $range) === 0)
        echo "found";
    else
        echo "false";

    //7
    echo "<h1>7</h1>";
    $arr7 = [1, 5, 9];
    echo max($arr7);

    //8
    echo "<h1>8</h1>";
    $num8 = 250;
    if ($num8 <= 50)
        $num8 *= 2.5;
    elseif ($num8 <= 150)
        $num8 *= 5;
    elseif ($num8 <= 250)
        $num8 *= 6.2;
    else
        $num8 *= 7.5;
    echo "<p>sum = $num8</p>";

    //9
    echo "<h1>9</h1>";
    $num9_1 = 3;
    $num9_2 = 5;
    $operation9 = "/";
    switch ($operation9) {
        case "+":
            $sum = $num9_1 + $num9_2;
            break;
        case "-":
            $sum = $num9_1 - $num9_2;
            break;
        case "*":
            $sum = $num9_1 * $num9_2;
            break;
        case "/":
            $sum = $num9_1 / $num9_2;
            break;
    }
    echo "<p>$num9_1 $operation9 $num9_2 = $sum";

    //10
    echo "<h1>10</h1>";
    $age = 17;
    echo "<p>Age = $age</p>";
    if ($age >= 18)
        echo "<p>Eligable</p>";
    else
        echo "<p>Not Eligable!</p>";

    //11
    echo "<h1>11</h1>";
    $num11 = 50;
    if ($num11 === 0)
        echo "<p>Zero</p>";
    elseif ($num11 > 0)
        echo "<p>Positive</p>";
    else
        echo "<p>Negative</p>";

    //12
    echo "<h1>12</h1>";
    $grades = [60, 86, 95, 63, 55, 74, 79, 62, 50];
    $avg = array_sum($grades) / count($grades);
    if ($avg >= 90 && $avg <= 100) echo "<p>A</p>";
    elseif ($avg >= 80) echo "<p>B</p>";
    elseif ($avg >= 70) echo "<p>C</p>";
    elseif ($avg >= 60) echo "<p>D</p>";
    else echo "<p>F</p>";



    ?>



</body>

</html>