<?php

/**
 * Evaluation constructors
 *
 */

#null and zero value is considered empty

$myVarEmpty = 0; 
$myVarEmpty2 = null;

var_dump(empty($myVarEmpty)); // true
var_dump(empty($myVarEmpty2)); // true

eval('echo \'hello world\';'); // check and execute the code as a string
echo "\n";

try {
    //    eval('echo sashuahsua'); #result in parse error (syntax)
} catch(\Exception $e) {
    print_r($e->geMessage(), 'ex'); // not work because is not an exception but is a Parse error
}

/*
require_once 
require
include 
include_once
*/
