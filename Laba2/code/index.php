<?php

// Task 1.
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order.= "\nit is easy task";

echo "\nYour order is: $very_bad_unclear_name.";


echo "<br>";   // separate tasks (new line)

// Task 2.
$variableOne = 777;
echo $variableOne;
echo "\n";            // task 2.2
$variableTwoFloat = 3.14;
echo $variableTwoFloat;

$first = 16;
$second = 4;
echo "\n";
echo $first - $second;

$last_month = 1187.23;
$this_month = 1089.98;
$differenceBetweenExpenses = $last_month - $this_month;
echo "\n$differenceBetweenExpenses";

echo "<br>";

// Task 11.
$num_languages = 4;     // Ruby, Python, JavaScript, C++
$months = 11;
$days = $months * 16;   // really learn 16 day!!!
$days_per_language = $days / $num_languages;
echo "$days_per_language days were spent learning each language!";

echo "<br>";

// Task 12.
echo 8 ** 2;       // 64

echo "<br>";

// Task 13.
$my_num = 5;
$answer = $my_num;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -= $my_num;
echo $answer;             // It's real 1.

echo "<br>";

// Task 14.
$a = 10;
$b = 3;
echo $a % $b;        // Remainder of the division
echo "\n";
echo "Check!. Is the number $a divisible by the number $b without remainder?";
echo "\n";
if ($a % $b == 0)
{
    echo "Yes. Without remainder.";
    echo "\n";
    echo $a / $b;         // value
}
else
{
    echo "No. It's divided with the remainder";
    echo "\n";
    echo $a % $b;         // remainder
    echo "\n";
}

$st = pow(2, 10);       // = 2 ** 10
echo $st; echo "\n";
$s = sqrt(245);
echo $s; echo "\n";

$arr = [4, 2, 5, 19, 13, 0, 10];
$sumSq = 0;
foreach ($arr as $arr)
{
    $sumSq += $arr ** 2;
}
$squareRoot = sqrt($sumSq);
echo "The square root of the sum of squares of the elements = $squareRoot";

echo "<br>";

echo "Continuation of the 14th task.";
echo round(sqrt(379)); echo "\n";                  // целое
echo round(sqrt(379), 1); echo "\n";      // до десятых
echo round(sqrt(379), 2); echo "\n";      // до сотых

$nb = 587;
$floor = floor(sqrt($nb));    // округление вниз до ближайшего значения
$ceil = ceil(sqrt($nb));      // вверх

$result = [
    'floor' => $floor,
    'ceil' => $ceil           // сохраняем значения в массив с ключами floor и ceil
];
print_r ($result);   echo "\n";

$arr2 = [4, -2, 5, 19, -130, 0, 10];
$min = min($arr2);
$max = max($arr2);
echo $min; echo "\n"; echo $max; echo "\n";

$randomNum = rand(1, 100);
echo $randomNum;  echo "\n";      // Генерируем случайно число от 1 до 100

$randomNum2 = array();            // Создаём пустой массив
for ($i = 0; $i < 10; $i++)       // 10 чисел
{
    $randomNum2[] = rand(1, 100);  // случайных от 1 до 10000
}
print_r ($randomNum2);

echo "<br>";

echo "Work the module."; echo "\n";
$a = 20;
$b = 50;                        // Модуль разности
$module = abs($a - $b);
echo $module; echo "\n";

$arr3 = [1, 2, -1, -2, 3, -3];
$newArr3 = [];
foreach ($arr3 as $arr3)   // Проходимся по массиву arr3
{
    if ($arr3 < 0) // Если число отрицательное
    {
        $newArr3[] = abs($arr3); // Преобразуем отрицательное число в положительное
    } else
    {
        $newArr3[] = $arr3; // Оставляем положительное без изменений
    }
}
print_r($newArr3); echo "\n";

// ПОИСК ДЕЛИТЕЛЕЙ ЧИСЛА.
$num = 30;
$divisors = [];    // Массив для хранения делителей
for ($i = 1; $i <= $num; $i++)  // Перебираем числа от 1 до исходного
{
    if ($num % $i === 0) // Делится ли без остатка?
    {
        $divisors[] = $i; // Добавляем делитель в массив
    }
}
print_r($divisors);

echo "<br>";
// last 14
$arr4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;            // сумма
$count = 0;          // счётчик для кол-ва
foreach ($arr4 as $element)      // проходимся по элементам
{
    $sum += $element;  // к элементу добавляем сумму
    $count++;
    if ($sum > 10)
    {
        break;     // выход из цикла при >10
    }
}
echo "Сумма первых $count элементов массива будет > 10!";

echo "<br>";

// Task 15.
function printStringReturnNumber($string)
{
    echo $string;
    return 738;
}
$my_num = printStringReturnNumber("Ну сколько ещё там заданий??"); // Вызов функции и сохраняем возвращаемое значение
echo $my_num; // Вывод переменной my_num

echo "<br>";

// Task 16.
function increaseEnthusiasm($str)
{                                       // добавляем восклицательный знак в конец строки
    return $str . "!";
}
echo increaseEnthusiasm("Да сколько можно?");
echo "\n";
function repeatThreeTimes($str)
{                                       // повторяем исходную строку три раза
    return $str . $str . $str;
}
echo repeatThreeTimes("Мяу");
echo "\n";
echo increaseEnthusiasm(repeatThreeTimes("Идём до конца"));   // 14.3
echo "\n";

function cut($str22, $length = 10)                   // обрезание строки через функцию
{
    return substr($str22, 0, $length);    // выделяем подстроку из переданной строки и возвращаем её же
}

$arr5 = [1, 3, 5, 7, 9];
function F($arr5, $index = 0)
{
    if ($index < count($arr5))
    {          // Вывод элементов массива через рекурсию
        echo $arr5[$index] . " ";
        F($arr5, $index + 1);
    }
}
F($arr5);       // вызов функции для arr5

$num2345 = 777;
function F2($num)               // Сумма цифр в числе (до однозначного)
{
    $sum = 0;              // cумма цифр
    while ($num > 0)
    {
        $sum += $num % 10;       // последняя цифра числа
        $num = (int)($num / 10); // убираем последнюю цифру чтобы перейти к следующей
    }
    if ($sum > 9)         // если >9 продолжаем
    {
        return F2($sum);
    }
    return $sum;
}
echo F2($num2345);

echo "<br>";

// Task 17
function arrayFill($value, $count)                    // Заполнение массива нужными значениями
{
    $result = [];
    for ($i = 0; $i < $count; $i++)
    {
        $result[] = str_repeat($value, $i + 1);
    }
    return $result;
}
$arr6 = arrayFill('x', 7);
print_r($arr6);   echo "\n";











