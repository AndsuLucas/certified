<?php
/**
 * COMMON_ERRORS:
 * 
 * E_ERROR; - 1
 * E_WARNING -2
 * E_PARSER - 4
 * E_NOTICE - 8
 */

$arr = [];
error_reporting(E_ALL);
// $b = $arr[1]; // results on E_NOTICE = 8;

echo "E_ALL: " . E_ALL; // 32767
echo "<br>";
echo "E_NOTICE: ". E_NOTICE; // 8
echo "<br>";
echo (E_ALL & ~E_NOTICE); // 32759
error_reporting(E_ALL & ~E_NOTICE);
$b = $arr[1]; // dont result in notice because 'error_reporting'

// ignore E_PARSER
echo '<br>';
echo "result:";
echo E_ERROR & E_NOTICE & E_WARNING & ~E_PARSE; // = 0 (NEGATIVA VALUES ON BITWISE IS EQUAL 0)
// echo $e=>1; // E_PARSER (UNRECOGNIZABLE EXPRESSION) = 4

