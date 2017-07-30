<?php

$alice = file_get_contents('alice.txt');
$pattern = ["'", '`',',', '"', '-', ':', ';', '.', '!', '?', ')', '(', '*'];
$string = str_replace($pattern, ' ', $alice);
$needles = str_word_count(strtolower($string),1);
foreach ($needles as $key => $val) {
    if(trim($val) == "") {
        unset($needles[$key]);
    }
}
$vals = array_count_values($needles);
arsort($vals);
function wordCount($array, $limit = -1)
{
    $sliced = array_slice($array, 0, $limit);
    foreach($sliced as $key=>$value) {
        echo $key . ' ' . $value . "\n";
    }
}
wordCount($vals, 5);

