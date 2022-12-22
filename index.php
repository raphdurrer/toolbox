<?php

use Kirby\Cms\Url;

Kirby::plugin('raphdurrer/toolbox', [
    'options' => [
        // Options
        'siteUrl' => Url::home(),
        'jsonDir' => __DIR__ . '/assets/jsonData',
    ],
    'blueprints' => [
        // Tabs
        'tabs/pagefiles' => __DIR__ . '/src/blueprints/tabs/pagefiles.yml',
        'tabs/seo' => __DIR__ . '/src/blueprints/tabs/seo.yml',
        // Sections
        'sections/pagecontent' => __DIR__ . '/src/blueprints/sections/pagecontent.yml',
        'sections/address' => __DIR__ . '/src/blueprints/sections/address.yml',
        'sections/socialmedia' => __DIR__ . '/src/blueprints/sections/socialmedia.yml',
        // Files
        'files/logoimage' => __DIR__ . '/src/blueprints/files/logoimage.yml',
        // User
        'users/editor' => __DIR__ . '/src/blueprints/users/editor.yml'
    ],
    'snippets' => [
        // Snippets
        'logo' => __DIR__ . '/src/snippets/logo.php',
        'pagecontent' => __DIR__ . '/src/snippets/pagecontent.php',
        'address' => __DIR__ . '/src/snippets/address.php',
        'socialmedia' => __DIR__ . '/src/snippets/socialmedia.php'
    ],
]);
