<?php
/*
Общий ход:
1) Установил интерпретатор php.exe
2) Установил composer
3) Скачал две библиотеки (google/apiclient и asimlqt/php-google-spreadsheet-client)
4) Посмотрел два видео: https://www.youtube.com/watch?v=MfhvNHY55cQ и https://www.youtube.com/watch?v=zoufwxZjr0c)
5) Опираясь на них вытащил из GoogleSheets нужный json-файл и настроил взаимодействие с гугл-таблицами
P.S. json-файл (creditionals) из GoogleSheets не могу прикрепить т.к. ругается GitHub Desktop
P.S.S. Это полная жесть...
*/
?>

<!doctype html>
<html lang = 'en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Название!</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="category">Category</label>
            <select name="category" required>
                <option value="cars">Cars</option>
                <option value="other">Other</option>
            </select>

            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="description">Description</label>
            <textarea rows="3" name="description"></textarea>

            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
            <th>Email</th>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>
            <?php
// Оставил из прошлой лабы
            $entries = glob('categories/*/*.txt');    // поиск файла из шаблонов .txt в папке categories
            foreach ($entries as $entry) {                   // перебираем каждый элемент массива
                $parts = explode('/', $entry);      // разделяем строку пути файла на части через /
                $category = $parts[1];
                $title = basename($parts[2], '.txt');  // имя файла без .txt расширения
                $description = file_get_contents($entry);    // чтение из файла
                $data = explode("\n", $description);

                require_once __DIR__ . '/vendor/autoload.php';     // подключение библиотеки

                // Google API клиент
                $client = new Google_Client();
                $client->setAuthConfig('creditionals.json');
                $client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);    // уровень доступа
                $service = new Google_Service_Sheets($client);  // сервис Google Sheets

                $spreadsheetId = '1rYS-JgaPsT2lpmt8ytlzeTaGyOZ7z-nq8a2cTVUCZIQ';  // id моей таблицы
                $range = "Test!A1:D1000";   // название листа с диапазаном ячеек

                // Получаем значения из указанного диапазона
                $response = $service->spreadsheets_values->get($spreadsheetId, $range);
                $values = $response->getValues();    // получаем данные и сохраняем в переменную

                echo "<tr>";
                echo "<td>{$data[0]}</td>";
                echo "<td>{$category}</td>";        // вывод данных в нужные места таблички
                echo "<td>{$title}</td>";
                echo "<td>{$data[1]}</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
