<?php

namespace OCA\Stempeluhr\AppInfo;

return [
    'routes' => [
        [
            'name' => 'page#index',
            'url' => '/',
            'verb' => 'GET',
            'defaults' => [
                '_controller' => 'OCA\Stempeluhr\Controller\PageController::index',
            ],
        ],
    ],
];
