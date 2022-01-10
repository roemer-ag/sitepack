<?php

/**
 * Extension Manager/Repository config file for ext "typo3_showcase2022".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'typo3-showcase-2022',
    'description' => 'roemer.ag Typo3-Showcase für eine ComposerBootstrap-Package-Installation',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Roemerag\\Typo3Showcase2022\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christoph Römer',
    'author_email' => 'christoph@roemer.ag',
    'author_company' => 'roemer.ag',
    'version' => '1.0.0',
];
