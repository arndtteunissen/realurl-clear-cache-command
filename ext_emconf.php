<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Realurl clear cache command',
    'description' => 'This package adds an extbase command to clear the realurl cache tables',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'realurl' => '2.0.0-2.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'author' => 'Tim Schreiner',
    'author_email' => 'dev@arndtteunissen.de',
    'author_company' => 'arndtteunissen GmbH',
    'version' => '1.0.0',
];
