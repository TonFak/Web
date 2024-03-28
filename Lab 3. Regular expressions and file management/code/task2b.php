<?php
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $userData = ['Фамилия'=>$surname,'Имя'=>$name, 'Возраст'=>$age];
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
    <button type="submit">Сохранить</button>
</form>
</body>
</html>