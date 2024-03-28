<form method="post">
    <textarea name="text"></textarea>
    <button type="submit">Подсчитать</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $text = $_POST['text'];
    $wordsCount = str_word_count($text);
    $charactersCount = strlen($text);

    echo "Количество слов: $wordsCount<br>";
    echo "Количество символов: $charactersCount";
}
?>
