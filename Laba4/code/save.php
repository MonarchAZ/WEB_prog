<?php
require_once __DIR__ . '/vendor/autoload.php';     // Подключение библиотеки

if (true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $desc = $_POST['description'];

    // Скопировал из видео
    $client = new Google_Client();
    $client->setApplicationName("Test");              // название гугл-таблицы
    $client->setAuthConfig(__DIR__. '/creditionals.json');   // *файл-разработчика*
    $client->addScope(Google_Service_Sheets::SPREADSHEETS);
    $client->setAccessType('offline');

    $service = new Google_Service_Sheets($client);
    $spreadsheetId = '1rYS-JgaPsT2lpmt8ytlzeTaGyOZ7z-nq8a2cTVUCZIQ';   // id гугл-таблицы

    $values = [
        [$email, $category, $title, $desc]         // значения которые будем передавать
    ];

    $range = "Test!A1:D1000";        // Название листа снизу и диапазон ячеек
    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);
    $params = [
        'valueInputOption' => 'RAW'
    ];

    // Оставил из прошлой лабораторной
    $filePath = "categories/{$category}/{$title}.txt";

    if (false === file_put_contents($filePath, "$email\n$desc")) {  // email в начало файла
        throw new Exception('Something went wrong.');
    }
    chmod($filePath, 0777);
}
// Сама запись в гугл таблицу
$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

// Возвращение на главную
header('Location: indexTask3.php');
exit();
?>

