<!doctype html>
<html lang="en">
<body>
<form method="post">
    <textarea name="text" rows="3" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Посчитать">
</form>

<?php
if (true === isset($_POST['submit'])) {
    $text = $_POST['text'];

    $countWords = str_word_count($text);                                 // кол-во слов
    $countSymbols = strlen(str_replace(' ', '', $text));   // символов (без пробела)
    echo "Количество слов:\n $countWords"; echo '<br / >';
    echo "Количество символов (без учёта пробелов):\n $countSymbols";
}
?>

</body>
</html>