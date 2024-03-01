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
echo $s;


