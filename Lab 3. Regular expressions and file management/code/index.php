<?php
$pattern = '/a..b/'; // Регулярное выражение
$str = 'ahb acb aeb aeeb adcb axeb artemka';
preg_match_all($pattern, $str, $matches);
echo "a) ";
echo "Найденные строки:\n";
foreach ($matches[0] as $match)
{
    echo $match . "\n";
}
echo "<br />";
echo "b) ";
$str = 'a1b2c3';
$pattern = '/\d/';
$result = preg_replace_callback($pattern, function($matches) {
    $number = $matches[0];
    return pow($number, 3);
}, $str);
echo $result;
