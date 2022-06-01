<?php

$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];

// $a = array("a" => "red", "b" => "green", "c" => "blue");
echo array_search("red", $arr);

// $arr = array("MAC", "WINDOWS", "LINUX", "SOLARIS");
// $search = "WINDOWS";
// echo array_search($search, $arr, true);