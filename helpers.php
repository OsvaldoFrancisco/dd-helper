<?php

// use function Symfony\Component\VarDumper\VarDumper\dump;

if (!function_exists('dd')) {
    function dd(...$vars) {
        foreach ($vars as $v) {
            dump($v);
        }
        die(1);
    }
}
