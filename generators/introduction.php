<?php

$products = [
    [   "id" => 1,
        "name" => "Milk"   
    ],
    [
        "id" => 2,
        "name" => "Ice Tea"
    ],
    [
        "id" => 3,
        "name" => "Cake"

    ],
    [
        "id" => 4,
        "name" => "Pie"
    ]
];

$start = microtime(true);

$getIds = function() use($products) {
    foreach ($products as $value) {
        yield 'id' => $value['id']; 
    }
};

foreach ($getIds() as $product) {
    echo $product . "\n" . PHP_EOL;
}

$end = microtime(true);
echo "\nResult: " . (string )($start - $end) . PHP_EOL;

