<?php
session_start();
echo "Фамилия:\n" . $_SESSION['surname']; echo '<br / >';
echo "Имя: " . $_SESSION['name']; echo '<br / >';
echo "Возраст: " . $_SESSION['age']; echo '<br / >';
