<?php
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $food = $_POST["food"];
    $userData = ['Фамилия'=>$surname,'Имя'=>$name,'Возраст'=>$age,'Зарплата'=>$salary,'Еда'=>$food];
    $_SESSION['userData'] = $userData;
    header("Location: task2b_page2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Form
    </title>
</head>
<body>
<form method="post">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="age" placeholder="Возраст">
    <input type="text" name="salary" placeholder="Зарплата">
    <input type="text" name="food" placeholder="Еда">

    <button type="submit">Сохранить</button>
</form>
</body>
</html>