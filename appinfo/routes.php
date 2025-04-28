<?php

namespace OCA\Stempeluhr\AppInfo;

use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

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
