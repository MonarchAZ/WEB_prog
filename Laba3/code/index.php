<?php

// Task 1a
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches); // Ищем вхождения шаблона /a..b/ в строке и сохраняем в массив совпадений
echo "Task 1a:\n";
print_r($matches[0]);
echo '<br />';


// Task 1b
$strOnePointB = 'a1b2c3';
// preg_replace_callback - заменяем совпадения с регуляркой в строке
$result = preg_replace_callback('/\d/', function($matchesPointB) {
    $number = intval($matchesPointB[0]);   // Преобразуем совпадение в число
    $cubed = $number ** 3;                 // Возводим в куб
    return $cubed;                         // Возвращаем результат
},
    $strOnePointB);
echo "Task 1b:\n $result";
echo '<br />';