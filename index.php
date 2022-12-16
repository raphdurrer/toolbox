<?php

Kirby::plugin('raphdurrer/toolbox', [

    'blueprints' =>[
        'sections/address' => __DIR__. '/src/blueprints/sections/address.yml',
        'sections/socialmedia' => __DIR__. '/src/blueprints/sections/socialmedia.yml'
    ],
    'snippets' =>[
        'address' => __DIR__. '/src/snippets/address.php',
        'socialmedia' => __DIR__. '/src/snippets/socialmedia.php'
    ],
]);
