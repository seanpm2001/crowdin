<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Enable Crowdin\'s In-Context Localization feature',
    'description' => 'In-Context Localization makes it possible to translate xliff strings directly in the backend',
    'category' => 'be',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'beta',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.2.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
