<?php
namespace main;
require_once './imports.php';

define('TESTE', 2);

function foo ($msg) {
	echo 'not this foo :c';
}

use constant \teste\TESTE;
use func \teste\foo;


echo \TESTE;
echo \foo('um');
