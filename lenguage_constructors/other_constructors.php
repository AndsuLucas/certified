<?php

/**
 * Other constructors
 *
 * */

$settedVar = "";
$unsetedVar = null;

var_dump(isset($settedVar)); #true
var_dump(isset($unsetedVar)); #false

unset($settedVar);
var_dump(isset($settedVar));


$myArr = ['one',  'two', 'three'];

list($one, $two, $three) = $myArr;

echo $one, $two, $three; # onetwothree

