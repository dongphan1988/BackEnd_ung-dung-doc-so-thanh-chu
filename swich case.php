<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <input type="text" name="input"/>
    <input type="submit"/>
</form>
</body>
</html>
<?php
$units = array("1" => "one", "2" => "two", "3" => "three", "4" => "four", "5" => "five", "6" => "six", "7" => "seven", "8" => "eight", "9" => "nine", "10" => "ten");
$arr1 = array("2" => "twenty", "3" => "thirty", "4" => "forty", "5" => "fifty", "6" => "sixty", "7" => "seventy", "8" => "eighty", "9" => "ninety");
$arr2 = array("1" => "eleven", "2" => "twelve", "3" => "thirteen", "4" => "fourteen", "5" => "fifteen", "6" => "sixteen", "7" => "seventeen", "8" => "eighteen", "9" => "nineteen");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["input"];
    if ($number <= 10) {
        switch ($number) {
            case 0:
                echo "zero";
                break;
            case 1:
                echo "one";
                break;
            case 2:
                echo "two";
                break;
            case 3:
                echo "three";
                break;
            case 4:
                echo "for";
                break;
            case 5:
                echo "five";
                break;
            case 6:
                echo "six";
                break;
            case 7:
                echo "seven";
                break;
            case 8:
                echo "eight";
                break;
            case 9:
                echo "nine";
                break;
            case 10:
                echo "ten";
                break;
        }
    } else if ($number < 20) {
        switch ($number) {
            case 11:
                echo "eleven";
                break;
            case 12:
                echo "twelve";
                break;
            case 13:
                echo "thirteen";
                break;
            case 14:
                echo "fourteen";
                break;
            case 15:
                echo "fifteen";
                break;
            case 16:
                echo "sixteen";
                break;
            case 17:
                echo "seventeen";
                break;
            case 18:
                echo "eighteen";
                break;
            case 19:
                echo "nineteen";
                break;

        }
    } else if ($number < 100) {
        switch ($number[0]) {
            case 2:
                echo "twenty " . $units[$number[1]];
                break;
            case 3:
                echo "thirty " . $units[$number[1]];;
                break;
            case 4:
                echo "forty " . $units[$number[1]];;
                break;
            case 5:
                echo "fifty " . $units[$number[1]];;
                break;
            case 6:
                echo "sixty " . $units[$number[1]];;
                break;
            case 7:
                echo "seventy " . $units[$number[1]];;
                break;
            case 8:
                echo "eighty " . $units[$number[1]];;
                break;
            case 9:
                echo "ninety " . $units[$number[1]];;
                break;
        }
    } else if ($number < 1000) {
        if ($number % 100 == 0) {
            switch ($number[0]) {
                case 1:
                    echo "one hundred";
                    break;
                case 2:
                    echo "two hundred";
                    break;
                case 3:
                    echo "three hundred";
                    break;
                case 4:
                    echo "for hundred";
                    break;
                case 5:
                    echo "five hundred";
                    break;
                case 6:
                    echo "six hundred";
                    break;
                case 7:
                    echo "seven hundred";
                    break;
                case 8:
                    echo "eight hundred";
                    break;
                case 9:
                    echo "nine hundred";
                    break;
            }
        } else if ($number % 100 < 20&&$number % 100>10) {
            switch ($number[2]) {
                case 1:
                    echo $units[$number[0]]." hundred eleven";
                    break;
                case 2:
                    echo $units[$number[0]]." hundred twelve";
                    break;
                case 3:
                    echo $units[$number[0]]." hundred thirteen";
                    break;
                case 4:
                    echo $units[$number[0]]." hundred fourteen";
                    break;
                case 5:
                    echo $units[$number[0]]." hundred fifteen";
                    break;
                case 6:
                    echo $units[$number[0]]." hundred sixteen";
                    break;
                case 7:
                    echo $units[$number[0]]." hundred seventeen";
                    break;
                case 8:
                    echo $units[$number[0]]." hundred eighteen";
                    break;
                case 9:
                    echo $units[$number[0]]." hundred nineteen";
                    break;
            }
        }else if($number%100 >19){
            switch ($number[0]) {
                case 1:
                    echo "one hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
                case 2:
                    echo "two hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
                case 3:
                    echo "three hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
                case 4:
                    echo "for hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
                case 5:
                    echo "five hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
                case 6:
                    echo "six hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
                case 7:
                    echo "seven hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
                case 8:
                    echo "eight hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
                case 9:
                    echo "nine hundred and ".$arr1[$number[1]]." ".$units[$number[2]];
                    break;
            }
        }else if($number[3]==0){
            switch ($number[0]) {
                case 1:
                    echo "one hundred ".$units[$number[1].$number[2]];
                    break;
                case 2:
                    echo "two hundred ".$units[$number[1].$number[2]];
                    break;
                case 3:
                    echo "three hundred ".$units[$number[1].$number[2]];
                    break;
                case 4:
                    echo "for hundred ".$units[$number[1].$number[2]];
                    break;
                case 5:
                    echo "five hundred ".$units[$number[1].$number[2]];
                    break;
                case 6:
                    echo "six hundred ".$units[$number[1].$number[2]];
                    break;
                case 7:
                    echo "seven hundred ".$units[$number[1].$number[2]];
                    break;
                case 8:
                    echo "eight hundred ".$units[$number[1].$number[2]];
                    break;
                case 9:
                    echo "nine hundred ".$units[$number[1].$number[2]];
                    break;
            }
        } else{
            switch ($number[0]) {
                case 1:
                    echo "one hundred and ".$units[$number[2]];
                    break;
                case 2:
                    echo "two hundred and ".$units[$number[2]];
                    break;
                case 3:
                    echo "three hundred and ".$units[$number[2]];
                    break;
                case 4:
                    echo "for hundred and ".$units[$number[2]];
                    break;
                case 5:
                    echo "five hundred and ".$units[$number[2]];
                    break;
                case 6:
                    echo "six hundred and ".$units[$number[2]];
                    break;
                case 7:
                    echo "seven hundred and ".$units[$number[2]];
                    break;
                case 8:
                    echo "eight hundred and ".$units[$number[2]];
                    break;
                case 9:
                    echo "nine hundred and ".$units[$number[2]];
                    break;
            }
        }
    }
}
?>