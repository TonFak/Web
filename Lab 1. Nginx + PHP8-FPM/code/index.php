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
if ($a % $br == 0) 
{
    echo "Делится, " . $a / $br;
} 
else 
{
    echo "Делится с остатком, остаток от деления будет равен " . $a % $br;
}
$st = pow(2, 10);
echo "<br />";
echo sqrt(245);
$summa = 0;
$array = [4, 2, 5, 19, 13, 0, 10];
foreach ($array as $value) 
{
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
echo "<br />";
echo max($array);
echo "<br />";
echo rand(1, 100);
echo "<br />";
$array = array();
for ($i = 0; $i < 10; $i++) 
{
    $array[] = rand();
}
foreach ($array as &$value) 
{
   echo $value . " ";
}
echo "<br />";
$a = rand(-100, 100);
$b = rand(-100, 100);
echo "|$a - $b| = " . abs($a - $b);
echo "<br />";
$array = [1, 2, -1, -2, 3, -3];
$newArray = array_map('abs', $array);
foreach ($newArray as &$value) 
{
   echo $value . " ";
}
echo "<br />";
$number = 30;
$array = [];
for ($i = 1; $i <= 30; $i++) 
{
    if (($number % $i) == 0) 
    {
        $array[] = $i;
    }
}
foreach ($array as &$value) 
{
    echo $value . " ";
}
echo "<br />";
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$summa = 0;
for ($i = 0; $i < count($array); $i++) 
{
    $summa += $array[$i];
    if ($summa > 10) 
    {
        echo $i+1;
        break;
    }
}
echo "<hr \>";
function printStringReturnNumber()
{
    echo "Ключи от двери.";
    return 7;
}
$my_num = printStringReturnNumber();
echo "<br />";
echo $my_num;
echo "<hr \>";
function increaseEnthusiasm($string)
{
    return $string . "!";
}
echo increaseEnthusiasm("Лето когда? Уже");
echo "<br />";
function repeatThreeTimes($string)
{
    return str_repeat($string, 3);
}
echo repeatThreeTimes("Матча-чай-латте ");
echo "<br />";
function cut($string, $int=10)
{
    if (strlen($string) <= $int) 
    {
        return $string;
    } 
    else 
    {
        $newString = '';
        for ($i = 0; $i < $int; $i++) 
        {
            $newString .= $string[$i];
        }
        return $newString;
    }
}
echo cut("Today we are going to talk about AMERICANO", 10);
echo "<br />";
function printArray($array)
{   
    if (count($array) == 0)
    {
        return;
    }
    echo $array[0] . " ";
    printArray(array_slice($array, 1));
}
$array = [1,2,3,4,5];
printArray($array);
echo "<br />";
function digitsCounter($number)
{
    if ($number < 0) 
    {
        $number = abs($number);
    }
    if ($number < 10) 
    {
        return $number;
    }
    $stringNumber = $number . '';
    $sum = intval($stringNumber[0]);
    for ($i = 1; $i < strlen($stringNumber); $i++) 
    {
        $sum += intval($stringNumber[$i]);
    }
    return digitsCounter($sum);
}
echo digitsCounter(12345);
echo "<hr \>";
function fillArrayX(&$array, $number)
{
    for ($i = 1; $i <= $number; $i++) 
    {
        $array[] = str_repeat('x', $i);
    }
}
$array = [];
fillArrayX($array,5);
foreach ($array as &$value) 
{
    echo $value . " ";
}
echo "<br />";
function arrayFill($value, $count)
{
    $array = array();
    for ($i = 0; $i < $count; $i++) 
    {
        $array[] = $value;
    }
    return $array;
}
$array = arrayFill('U', 5);
foreach ($array as $item) 
{
    echo $item . ' ';
}
echo "<br />";
$array = [
    [1,2,3],
    [4,5],
    [6]
];
$sum = 0;
foreach($array as $item)
{
    foreach ($item as $value)
    {
        $sum += $value;
    }
}
echo $sum;
echo "<br />";
$counter = 1;
$array = [];
for ($i = 0; $i < 3; $i++) 
{
    $array[] = array();
    for ($j = &$counter; $j < 10; $j++) 
    {
        $array[$i][] = $j;
    }
}
foreach ($array as $item) 
{
    foreach ($item as $value) 
    {
        echo $value . ' ';
    }
}
echo "<br />";
$array = [2, 5, 3, 9];
$firstNumber = $array[0] * $array[1];
$secondNumber = $array[2] * $array[3];
$result = $firstNumber + $secondNumber;
echo $result;
$user = array('name' => 'Artyom', 'surname' => 'Vasilev', 'patronymic' => 'Olegovich');
echo "<br />";
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];
echo "<br />";
$date = array('year' => 2024, 'month' => 3, 'day' => 8);
$res = '';
foreach ($date as $value) 
{
    $res .= $value . '-';
}
echo rtrim($res, '-');
echo "<br />";
$arr = ['a', 'b', 'c', 'd', 'e'];
$count = 0;
foreach ($arr as $item) 
{
    $count++;
}
echo "Количество символов в массиве - ". $count;
echo "<br />";
echo $arr[$count - 1];
echo "<br />";
echo $arr[$count - 2];
echo "<hr />";
function moreThanTen($a, $b)
{
    return (($a + $b) > 10);
}
if (moreThanTen(4, 5)) 
{
    echo 'true';
} 
else 
{
    echo 'false';
}
echo "<br />";
function ravno($a, $b)
{
    return ($a === $b);
}
if (ravno(8, 9)) 
{
    echo 'true';
} 
else
{
    echo 'false';
}
echo "<br />";
$test = 0;
echo(($test == 0) ? 'верно' : '');
echo "<br />";
$age = rand(1, 500);
if (($age < 10) or ($age > 99)) 
{
    echo "Число $age больше 99 или меньше 10";
}
else
{
    $sum = 0;
    $temp = str_split(strval($age));
    foreach ($temp as $value)
    {
        $sum += intval($value);
    }
    echo $sum > 9 ? "Двузначна" : "Однозначна";
}
echo "<br />";
$arr = [];
$number = rand(1, 5);
for ($i = 0; $i < $number; $i++) 
{
    $arr[] = rand(1, 100);
}
foreach ($arr as $item)
{
    echo $item . ' ';
}
$i = 0;
$sum = 0;
foreach ($arr as $item) 
{
    $i++;
    if ($i == 4) 
    {
        break;
    }
    $sum += $item;
}
echo "<br />";
if ($i == 3) 
{
    echo $sum;
}
echo "<hr />";
for ($i = 1; $i < 21; $i++) 
{
    echo str_repeat('x', $i);
    echo "<br />";
}
echo "<hr />";
$arr = array();
$number = rand(1, 5);
for ($i = 0; $i < $number; $i++) 
{
    $arr[] = rand(1, 100);
}
foreach ($arr as $item) 
{
    echo $item . ' ';
}
echo "<br />";
$mean = array_sum($arr) / count($arr);
echo $mean;
echo "<br />";
function from1to100($x = 100)
{
    if ($x == 1) 
    {
        return 1;
    }
    else 
    {
        return ($x + from1to100($x - 1));
    }
}
echo from1to100();
echo "<br />";
$arr = [];
$number = rand(1, 5);
for ($i = 0; $i < $number; $i++) 
{
    $arr[] = rand(1, 100);
}
foreach ($arr as $item) 
{
    echo $item . ' ';
}
echo "<br />";
$sqrtArr = array_map('sqrt', $arr);
foreach ($sqrtArr as $item) 
{
    echo $item . ' ';
}
echo "<br />";
$firstArr = range('a', 'z');
$secondArr = range(1, 26);
$combinedAssociativeArray = array_combine($firstArr, $secondArr);
foreach ($combinedAssociativeArray as $key => $value) 
{
    echo "Key: $key; Value: $value <br />";
}
$str = "1234567890";
echo array_sum(str_split($str, 2));
echo "<hr />";
