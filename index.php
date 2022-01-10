<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- post form  -->
    <form action="./index.php" method="post">
        Input: <input type="text" name="input"><br>

        <input type="submit">
    </form>

    Output: <?php
            #ex 1
            // echo strtoupper($_POST['input']);
            // echo strtolower($_POST['input']);
            // echo ucfirst($_POST['input']);
            // echo ucwords($_POST['input']);

            #ex 2


            $numbersArray = str_split($_POST['input'], 2);
            echo implode(":", $numbersArray);

            #ex 3
            // $needle = "Orange";
            // echo $needle;
            // echo str_contains($haystack, $needle);

            // $haystack = "I am a full stack developer at orange coding academy";
            // $needle = $_POST['input'];
            // #case sensitve
            // // echo str_contains($haystack, $needle) ? "Word found" : "Word not found";
            // #case insensitive
            // echo mb_stripos($haystack, $needle) ? "Word found" : "Word not found";

            #ex 4
            // $script = "www.orange.com/index.php";
            // $extracedWord = substr($script, strpos($script, "/") + 1);
            // echo $extracedWord;

            #ex 5
            // $script = "info@orange.com";
            // // $extracedWord = substr($script, strpos($script, "@") + 1);
            // $extracedArray = explode("@", $script);
            // echo $extracedArray[0];

            #ex 6
            // $script = "info@orange.com";
            // echo substr($script, -3);

            #ex 7
            // $script = "1234567890ABCDEFGHIKLMNOOQRSUVWXYZabcefghijklmnogpqrstuvwxyz";
            // $numbersArray = str_split($script, 2); #string #array
            // $numbersArray = implode('', $numbersArray); #array #string
            // $numbersArray = strrev($numbersArray);
            // echo "<pre>";
            // print_r($numbersArray);
            // echo "</pre>";

            //$alphabet = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"; return substr(str_shuffle($alphabet), 0, 8);


            #ex 8
            // $script = "that new trainee is so genius";
            // $wordToReplace = $_POST['input'];
            // echo str_replace("that", $wordToReplace, $script);

            #ex 9
            //solution 1
            // $str1 = "dragonball";
            // $str2 = "dragonboll";
            // // $str1 = "a";
            // // $str2 = "o";
            // for ($i = 0; $i < strlen($str1); $i++) {
            //     // if (strpos($str1[$i], $str2[$i]) === 0) {
            //     //     // echo "true";
            //     // } else {
            //     //     echo "difference found at position $i : " . $str1[$i] . " vs "  . $str2[$i];
            //     //     break;
            //     // }

            //solution 2
            //     if ($str1[$i] <=> $str2[$i]) {
            //         echo "difference found at position $i : " . $str1[$i] . " vs "  . $str2[$i];
            //         break;
            //     }
            // }

            #ex 10
            // $twinkle = "Twinkle, tinkle, little star.";
            // $stringToArray = explode(", ", $twinkle);
            // var_dump($stringToArray);


            #ex 11
            // $char = $_POST['input'];
            // $nextChar = ++$char;
            // echo $nextChar;


            #ex 12
            // $oldStr = "The brown fox";
            // $stringToInsert = " " . $_POST['input'];
            // // $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
            // $newstr = substr_replace($oldStr, $stringToInsert, 3, 0);
            // echo $newstr;

            #ex 13
            // $originalString = '0000657022.24';
            // $stringTOArray = str_split($originalString);
            // // var_dump($newArray); # check type if array
            // $newArray = array_filter($stringTOArray); # remove false values
            // $arrayToString = implode('', $newArray);
            // echo $arrayToString;


            #ex 14
            #str_replace($search, $replace, $subject);
            // $stringToRemoveFrom = "the quick brown fox jumps over the lazy dog";
            // $wordToRemove = $_POST['input'];
            // echo $newString = str_replace($wordToRemove, "", $stringToRemoveFrom);

            #ex 15
            // $stringToRemoveFrom = "--the -quick -brown -fox -jumps -over -the -lazy dog--";
            // echo $newString = str_replace("-", "", $stringToRemoveFrom);


            #ex 16
            // $sampleString = '"\1+2/3*2:2-3/4*3';
            // echo preg_replace('/[^A-Za-z0-9\-]/', ' ', $sampleString);

            #ex 17
            // $stringToSelectFrom = "the quick brown fox jumps over the lazy dog";
            // // $newString = explode(' ', trim($stringToSelectFrom));
            // $newString = explode(' ', $stringToSelectFrom);
            // for ($i = 0; $i < 5; $i++) {
            //     echo $newString[$i] . " ";
            // }



            #ex 18
            // $sampleString = '2,543. 12';
            // echo str_replace(",", "", $sampleString);



            #ex 19
            // for ($i = 'a'; $i < 'z'; $i++) {
            //     echo $i . ' ';
            // }

            // for ($i = 97; $i <= 122; $i++) {
            //     echo chr($i) . " ";
            // }















            ?>

    <!-- your email is <?php echo $_POST["email"] ?> -->
</body>

</html>