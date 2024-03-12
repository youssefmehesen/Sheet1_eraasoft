<?php
// EraaSoft Learn by practice ,Get the length of this sentence.
$sentence = 'EraaSoft Learn by practice';
echo strlen($sentence) . '<br>';

// Get the length of this sentence without spaces
$removing = str_replace(" ", "", $sentence);
echo strlen($removing) . '<br>';

// Get the number of words in this sentence
echo str_word_count($sentence) . '<br>';

// Check if this word (by) exists in the string or not.
if (strpos($sentence, "by") !== false) {
    echo "the word (by) is found" . '<br>';
} else {
    "the word (by) isn't found";
}

// Get the word (EraaSoft) from the string and print it.
$sub = substr($sentence, 0, 8);
echo $sub . '<br>';

// Remove the word (by) from the string and print the string with and without (by)
echo $sentence . "<br>";
// echo trim($sentence, "b y");
$sentence = str_replace("by", "", $sentence,);
echo $sentence . '<br>';
