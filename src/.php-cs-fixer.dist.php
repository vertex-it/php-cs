<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

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


return styles($finder);

function styles(Finder $finder, array $rules = []): Config {
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    $config = new Config();

    return $config
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
