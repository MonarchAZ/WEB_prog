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
            $entries = glob('categories/*/*.txt');    // поиск файла из шаблонов .txt в папке categories
            foreach ($entries as $entry) {                   // перебираем каждый элемент массива
                $parts = explode('/', $entry);      // разделяем строку пути файла на части через /
                $category = $parts[1];
                $title = basename($parts[2], '.txt');  // имя файла без .txt расширения
                $description = file_get_contents($entry);    // чтение из файла
                $data = explode("\n", $description);
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
