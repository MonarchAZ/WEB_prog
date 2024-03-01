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
print_r ($result);










