<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
}
?>
<form method="post" action="task2b_page2.php">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="age" placeholder="Возраст">
    <button type="submit">Сохранить</button>
</form>