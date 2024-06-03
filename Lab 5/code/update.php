<?php
$mysqli = new mysqli("db", "root", "helloworld", "web");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
}

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['categories']);;
    $description = $mysqli->real_escape_string($_POST['text']);

    $query = "INSERT INTO ad (email,title,category,description) VALUES ('$email','$title','$category','$description')";
    $mysqli->query($query);
}

header('Location: index.php');
exit();
?>

