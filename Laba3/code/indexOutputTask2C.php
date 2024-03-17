<?php
session_start();
?>

<!doctype html>
<html lang = 'en'>
<body>
<ul>
    <?php
    if (true === isset($_SESSION['userdata'])) {
        $data = $_SESSION['userdata'];
        foreach ($data as $key => $value)
        {
            echo "<li> $key: $value <li>";
        }
    }
    ?>
</ul>
</body>
</html>