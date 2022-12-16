<?php

Kirby::plugin('raphdurrer/toolbox', [
    'options' => [
        'siteurl' => site()->url()
    ],
    'blueprints' => [
        'sections/address' => __DIR__ . '/src/blueprints/sections/address.yml',
        'sections/socialmedia' => __DIR__ . '/src/blueprints/sections/socialmedia.yml'
    ],
    'snippets' => [
        'address' => __DIR__ . '/src/snippets/address.php',
        'socialmedia' => __DIR__ . '/src/snippets/socialmedia.php'
    ],
]);
