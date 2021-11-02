<?php

use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(
        [
            __DIR__ . '/app',
            __DIR__ . '/config',
            __DIR__ . '/database',
            __DIR__ . '/routes',
            __DIR__ . '/tests',
        ]
    );


return VertexIT\styles($finder);
