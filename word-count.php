<?php

$alice = file_get_contents('alice.txt');
$pattern = ["'", ',',', ','.','-','`','(',')', ':', '_', '"', '!', ';', '?'];
$string = str_replace($pattern, '', $alice);
$needles = explode(' ', strtolower($string));
foreach ($needles as $key => $val) {
    if(trim($val) == "") {
        unset($needles[$key]);
    }
}
$vals = array_count_values($needles);
arsort($vals);

function wordCount($vals, $limit = -1)
{
    $sliced = array_slice($vals, 0, $limit);
    foreach($sliced as $key=>$value) {
        echo $key . ' ' . $value . "\n";
    }
}
wordCount($vals, 5);

