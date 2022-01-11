<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>EX 1</h3>
    <?php
    $colors = array("Green", "Red", "White");

    echo "Lorem" . $colors[0] . $colors[1] . $colors[2] . " ipsum dolor sit amet consectetur adipisicing elit. Quo mollitia natus tempore magni doloribus repellendus quisquam reiciendis veritatis libero quia?";
    ?>

    <!-- ex 2 -->
    <hr>
    <h3>EX 2</h3>
    <ul>
        <?php
        $colors = array("Green", "Red", "White");
        foreach ($colors as  $color) {
            echo "<li>";
            echo $color;
            echo "</li>";
        }
        ?>
    </ul>
    <hr>
    <h3>EX 2</h3>

    <?php
    $cities = array(
        "Italy" => "Rome",
        "France" => "Paris",
        "Germany" => "Berlin",
        "Greece" => "Athens"
    );
    foreach ($cities as $country => $capital) {
        echo "The capital of $country is $capital";
        echo "<br>";
    }
    ?>
    <hr>
    <h3>EX 4</h3>
    <?php
    $colors = ["Green", "Red", "White"];
    echo $colors[0];
    ?>
    <hr>
    <h3>Ex 5</h3>
    <?php
    $array = [1, 2, 3, 4, 5];
    $insertedValue = "$";
    $position = 4;
    $length = 0;
    array_splice($array, $position, $length, $insertedValue); // splice in at position 4
    // var_dump($array);
    // echo "<pre>" . print_r($array) . "</pre>";
    foreach ($array as $key => $value) {
        echo "$value ";
    }
    ?>

    <hr>
    <h3>Ex 6</h3>
    <?php
    // $data[] = array('volume' => 67, 'edition' => 2);
    // $data[] = array('volume' => 86, 'edition' => 1);
    // $data[] = array('volume' => 85, 'edition' => 6);
    // $data[] = array('volume' => 98, 'edition' => 2);
    // $data[] = array('volume' => 86, 'edition' => 6);
    // $data[] = array('volume' => 67, 'edition' => 7);
    // // echo "<pre>" . print_r($data) . "</pre>";
    // // foreach ($data as $key => $row) {
    // //     // echo $key;
    // //     // echo "<pre>" . print_r($row) . "</pre>";
    // //     // echo $row;
    // //     $volume[$key]  = $row['volume'];
    // //     $edition[$key] = $row['edition'];
    // // }
    // $volume  = array_column($data, 'volume');
    // $edition = array_column($data, 'edition');
    // var_dump($volume);
    // var_dump($edition);
    // array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);
    // var_dump($volume);
    // var_dump($edition);

    $fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];
    asort($fruits);
    foreach ($fruits as $key => $value) {
        echo "$key = $value <br/>";
    }
    ?>
    <hr>
    <h3>Ex 7</h3>
    <?php
    $temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $sum = 0;
    $sortedTemperatures = $temperatures;
    sort($sortedTemperatures);
    foreach ($sortedTemperatures as $key => $value) {
        // echo "$value ";
        $sum += $value;
    }
    $averageTemperature = $sum / count($sortedTemperatures);
    echo "Average Temperature = " . number_format($averageTemperature, 2);
    echo "<br/>";
    echo "<br/>";
    echo "List of seven lowest temperatures: ";
    for ($i = 0; $i < 7; $i++) {
        echo $sortedTemperatures[$i] . " ";
    }
    echo "<br/>";
    echo "List of seven highest temperatures: ";
    for ($i = count($sortedTemperatures) - 7; $i < count($sortedTemperatures); $i++) {
        echo $sortedTemperatures[$i] . " ";
    }
    echo "<br/>";
    echo "<br/>";
    $uniqueArray = array_values(array_unique($sortedTemperatures)); #//array_unique: for unique array array_values: for reindexing
    #display unique 7 numbers

    echo "Unique Seven lowest temperatures: ";
    for ($i = 0; $i < 7; $i++) {
        echo $uniqueArray[$i] . " ";
    }
    echo "<br/>";
    echo "Unique Seven highest temperatures: ";
    for ($i = count($uniqueArray) - 7; $i < count($uniqueArray); $i++) {
        echo $uniqueArray[$i] . " ";
    }
    ?>
    <hr>
    <h3>Ex 8</h3>
    <?php
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color"  => "green", "shape" => "trapezoid", 4);
    $mergedArray = array_merge($array1, $array2);
    foreach ($mergedArray as $key => $value) {
        echo "[$key] => $value <br/>";
    }
    ?>
    <hr>
    <h3>Ex 9</h3>
    <?php
    $colors = ['red', 'blue', 'white', 'yellow'];
    foreach ($colors as $key => $value) {
        $colors[$key] = strtoupper($value);
        echo "[$key] => " . $colors[$key] . "<br/>";
    }
    ?>
    <hr>
    <h3>Ex 10</h3>
    <?php
    $colors = ['RED', 'BLUE', 'WHITE', 'YELLOW'];
    foreach ($colors as $key => $value) {
        $colors[$key] = strtolower($value);
        echo "[$key] => " . $colors[$key] . "<br/>";
    }
    ?>
    <hr>
    <h3>Ex 11</h3>
    <?php
    for ($i = 200; $i < 251; $i++) {
        if ($i % 4 === 0)
            echo "$i ";
        #or 
        echo !($i % 4) ? "$i " : '';
    }
    ?>
    <hr>
    <h3>Ex 12</h3>
    <?php
    $words = ['abcd', 'abc', 'de', 'hjjj', 'g', 'wer'];
    $lengths = array_map('strlen', $words);
    echo "The shortest is " . min($lengths) .
        ". The longest is " . max($lengths) . '.';
    ?>
    <hr>
    <h3>Ex 13</h3>
    <?php
    $counter = 0;
    $array = array();
    while ($counter !== 10) {
        $num = rand(1, 20);
        if (!in_array($num, $array)) {
            array_push($array, $num);
            $counter++;
        }
    }
    foreach ($array as $key => $value) {
        echo "[$key] => " . $value . "<br/>";
    }
    ?>

    <hr>
    <h3>Ex 14</h3>
    <?php
    $array1 = [2, 0, 10, 12, 6];
    $minimum = PHP_INT_MAX; # start with the biggest int value
    foreach ($array1 as $key => $value) {
        if ($minimum > $value && $value !== 0)
            $minimum = $value;
    }
    echo $minimum;
    ?>

</body>

</html>