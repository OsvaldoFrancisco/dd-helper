<?php

require __DIR__ . '/vendor/autoload.php';

$teste = [
    'nome' => 'Osvaldo',
    'projeto' => 'debug global',
    'versao' => '1.0.0',
    'data' => date('Y-m-d H:i:s'),
];
$teste2 = [
    'nome' => 'Manuel',
    'projeto' => 'debug global',
    'versao' => '1.0.0',
    'data' => date('Y-m-d H:i:s'),
];
$teste3 = [
    'nome' => 'Francisco',
    'projeto' => 'debug global',
    'versao' => '1.0.0',
    'data' => date('Y-m-d H:i:s'),
];

$teste4 = ['nome' => 'Manuel', 'projeto' => 'debug global'];
$teste5 = ['nome' => 'Francisco', 'projeto' => 'debug global'];

/* foreach ($teste as $key => $value) {
    echo "$key: $value\n";
} */

dd($teste, $teste2, $teste3);
