<?php
session_start();
if (isset($_SESSION['surname']) && isset($_SESSION['name']) && isset($_SESSION['age']))
{
    $surname = $_SESSION['surname'];
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];

    echo "Фамилия: $surname<br>";
    echo "Имя: $name<br>";
    echo "Возраст: $age";
} else {
    echo "Данные не найдены";
}
?>
