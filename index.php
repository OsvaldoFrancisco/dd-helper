<?php

require __DIR__ . '/vendor/autoload.php';

$teste = ['nome' => 'Osvaldo', 'projeto' => 'debug global'];
$teste2 = ['nome' => 'Manuel', 'projeto' => 'debug global'];
$teste3 = ['nome' => 'Francisco', 'projeto' => 'debug global'];

foreach ($teste as $key => $value) {
    echo "$key: $value\n";
}

//dd($teste, $teste2, $teste3);

