<?php

echo "hello world";
opcache_reset();
var_dump(opcache_get_status());

$var = 48;
++ $var;

echo $var;
