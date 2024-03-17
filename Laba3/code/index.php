<?php

// Task 1a
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches); // Ищем вхождения шаблона /a..b/ в строке и сохраняем в массив совпадений
echo "Task 1a:\n";
print_r($matches[0]);
echo '<br />';


