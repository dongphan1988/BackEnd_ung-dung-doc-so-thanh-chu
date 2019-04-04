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
$arr = array("1" => "one", "2" => "two", "3" => "three", "4" => "four", "5" => "five", "6" => "six", "7" => "seven", "8" => "eight", "9" => "night", "10" => "ten");
$arr1 = array("2" => "twenty", "3" => "thirty", "4" => "forty", "5" => "fifty", "6" => "sixty", "7" => "seventy", "8" => "eighty", "9" => "ninety");
$arr2 = array("1" => "eleven", "2" => "twelve", "3" => "thirteen", "4" => "fourteen", "5" => "fifteen", "6" => "sixteen", "7" => "seventeen", "8" => "eighteen", "9" => "nineteen");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["input"];
    if ($num >= 1000) {
        echo "out of ability";
    } else if ($num >= 100) {
        if ($num % 100 == 0) {
            echo $arr[$num[0]] . " hundred " ;
        } else if ($num[1] . $num[2] <= 19) {
            echo $arr[$num[0]] . " hundred " . $arr2[$num[2]];
        } else {
            echo $arr[$num[0]] . " hundred and " . $arr1[$num[1]] . " " . $arr[$num[2]];
        }
    } else if ($num >= 20) {
        echo $arr1[$num[0]] . " " . $arr[$num[1]];
    } else if ($num >= 11 && $num < 20) {
        echo $arr2[$num[1]];
    } else {
        echo $arr[$num[0]];
    }
}
?>