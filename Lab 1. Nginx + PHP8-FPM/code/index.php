<?php
/* Imagine a lot of code here */ 
 $very_brad_unclear_name = "15 chicken wings";


// Write your code here:

$order =& $very_brad_unclear_name;
$order = $order . " and Japanese Tree ";

  
 // Don't change the line brelow
 echo "\nYour order is: $very_brad_unclear_name.";
 echo "<br />";
 $tyoma = 3;
echo $tyoma;
$sveta = 7.5;
echo "<br />";
echo $sveta + $sveta - $tyoma;
echo "<hr>";
$lastMonth = 1187.23;
$thisMonth = 1089.98;
$difference = $lastMonth - $thisMonth;
echo $difference;
echo "<hr>";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;
echo "<hr>";
echo 8 ** 2;
echo "<hr>";
$myNum = 131;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer;
echo "<hr>";
$a = 10;
$br = 3;
echo "$a % $br = " . $a % $br;
echo "<br />";
if ($a % $br == 0) {
    echo "Делится, " . $a / $br;
} else {
    echo "Делится с остатком, остаток от деления будет равен " . $a % $br;
}
$st = pow(2, 10);
echo "<br />";
echo sqrt(245);
$summa = 0;
$array = [4, 2, 5, 19, 13, 0, 10];
foreach ($array as $value) {
    $summa += pow($value, 2);
}
echo "<br />";
echo sqrt($summa);
echo "<br />";
echo round(sqrt(379));
echo "<br />";
echo round(sqrt(379), 1);
echo "<br />";
echo round(sqrt(379), 2);
echo "<br />";
$array = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];
echo $array["floor"] . " меньше чем " . $array["ceil"];
echo "<br />";
$array = [4, -2, 5, 19, -130, 0, 10];
echo min($array);
echo "<br \>";
echo max($array);
echo "<br \>";
echo rand(1, 100);
echo "<br \>";
$array = array();
for ($i = 0; $i < 10; $i++) {
    $array[] = rand();
}
foreach ($array as &$value) {
   echo $value . " ";
}
echo "<br \>";
$a = rand(-100, 100);
$b = rand(-100, 100);
echo "|$a - $b| = " . abs($a - $b);
echo "<br \>";
$array = [1, 2, -1, -2, 3, -3];
$newArray = array_map('abs', $array);
foreach ($newArray as &$value) {
   echo $value . " ";
}
echo "<br \>";
$number = 30;
$array = [];
for ($i = 1; $i <= 30; $i++) {
    if (($number % $i) == 0) {
        $array[] = $i;
    }
}
foreach ($array as &$value) {
    echo $value . " ";
 }
echo "<br \>";
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$summa = 0;
for ($i = 0; $i < count($array); $i++) {
    $summa += $array[$i];
    if ($summa > 10) {
        echo $i+1;
        break;
    }
}