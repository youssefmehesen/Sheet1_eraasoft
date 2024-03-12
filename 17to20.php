<?php

// $description = "no pain , no gain ";

/*
17- Check from this string o If the string has “gain” Print ( success word ) o If the string has (
peen ) Print ( success word ) Else ( wrong word)
*/
$string = "no pain , no gain ";
if (str_contains($string, "gain")) {
    echo "success word";
} elseif (str_contains($string, "peen")) {
    echo "success word";
} else {
    echo "wrong word";
}
echo '<br>';

/*
19- Write a PHP script that stores a word and determines Is the Word is Singular or Plural?
(A plural word is one that ends in "s".)
*/

$word = "keeps";
if (substr($word, -1) === 's') {
    echo "your word $word is plural";
} else {
    echo "your word $word is singular";
}
echo "<br>";


/*
20- Make a calculator with these operations using if and else if
o Submission
o Subtraction
o Multiplication
o Division
o Power
o Modulus
*/

$num1 = 1;
$num2 = 2;
$operation = "division"; // You can change this to test different operations

if ($operation === "addition") {
    $result = $num1 + $num2;
    echo "Result of addition: $result";
} elseif ($operation === "subtraction") {
    $result = $num1 - $num2;
    echo "Result of subtraction: $result";
} elseif ($operation === "multiplication") {
    $result = $num1 * $num2;
    echo "Result of multiplication: $result";
} elseif ($operation === "division") {
    if ($num2 != 0) {
        $result = $num1 / $num2;
        echo "Result of division: $result";
    } else {
        echo "Cannot divide by zero";
    }
} elseif ($operation === "power") {
    $result = pow($num1, $num2);
    echo "Result of power: $result";
} elseif ($operation === "modulus") {
    if ($num2 != 0) {
        $result = $num1 % $num2;
        echo "Result of modulus: $result";
    } else {
        echo "Cannot perform modulus with zero divisor";
    }
} else {
    echo "Invalid operation";
}
echo '<br>';
/*
18- A Boolean is a data type that has only two values true or false. These values often
correspond to 1 (true) or 0 (false). When a 1 or a 0 is used, it's called an int Boolean.
Write a PHP script that stores an int Boolean and outputs its opposite
(1 becomes 0 and 0 becomes 1).
*/

$num = 1;
$num = !$num;
if ($num == 1) {
    echo "false";
} else {
    echo "true";
}
echo '<br';
