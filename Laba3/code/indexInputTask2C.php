<!doctype html>
<html lang="en">
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for = "name" > Имя: </label>
    <input type = "text" name = "name" id = "name" ><br><br>

    <label for = "age" > Возраст: </label>
    <input type = "text" name = "age" id = "age" ><br><br>

    <label for = "salary" > Зарплата: </label>
    <input type = "text" name = "salary" id = "salary" ><br><br>

    <label for = "extra" > Дополнительная информация: </label>
    <input type = "text" name = "extra" id = "extra" ><br><br>

    <button type="submit" > Подтвердить </button>
</form>

</body>
</html>
