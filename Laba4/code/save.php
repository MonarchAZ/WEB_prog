<?php
if (true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $filePath = "categories/{$category}/{$title}.txt";

    if (false === file_put_contents($filePath, "$email\n$desc")) {  // email в начало файла
        throw new Exception('Something went wrong.');
    }
    chmod($filePath, 0777);
}
header('Location: indexTask3.php');
exit();
?>

