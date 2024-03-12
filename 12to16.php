<?php
// 12- Make a new variable called (Full_string) that concatenate string_one and string_two
$string_one = "Eraa";
$string_two = "Soft";
$Full_string = $string_one . $string_two;
echo $Full_string;
echo '<br>';

// 13- Compare the full_string and this string (EraaSoft).
$string = "EraaSoft";
echo strcmp($Full_string, $string);
echo '<br>';

/*14- Write a PHP script to split the following string.
Sample string: 'ErraSoft'
Expected Output: Er/ra/So/ft
*/
$sample = "ErraSoft";
print_r(str_split("$sample", 2));
echo '<br>';

// 15- Write a PHP script that stores the number as a variable and checks if it is odd oreven.
$num = 10;
if ($num % 2 == 0) {
    echo "your num $num is even";
} else {
    echo "your num $num is odd";
}
echo '<br>';

// 16- Write a PHP script that stores the string as a variable and checks if it is odd or even.
$num = "10";
$num = (int)$num;
if ($num % 2 == 0) {
    echo "your num $num is even";
} else {
    echo "your num $num is odd";
}
