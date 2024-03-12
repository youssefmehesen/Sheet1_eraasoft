<?php
// Write a PHP script that records 3 digits and prints the total of the first two digits
// multiplied by the third digit
$num1 = 1;
$num2 = 3;
$num3 = 5;
$total = ($num1 + $num2) * $num3;
echo $total;
echo "<br>";

// A program that calculates the size of a box whose length and width are fixed with a
// value of 5 and 10 and the height is variable (size = length x width x height)
define("LENGHT", 5);
define("WIDTH", 10);
$height = 10;
$size = LENGHT * WIDTH * $height;
echo $size;
echo "<br>";

// Write a PHP script that takes a number integer representing the hours and converts it
// to seconds
$hour = 2;
$num_of_seconds = $hour * 60 * 60;
echo $num_of_seconds;
echo "<br>";

/*Write a PHP script that calculates the Area of a Triangle store the base and height Print
the area */
$base = 5;
$height = 5;
$area = 0.5 * ($base * $height);
echo $area;
echo "<br>";
/*
Write a PHP script that takes the age in years and prints the age in days.
*/
$age_year = 22;
$age_days = $age_year * 365;
echo $age_days;
echo "<br>";
