<?php

namespace OCA\Stempeluhr\AppInfo;

use OCP\AppFramework\App;

$app = new App('stempeluhr');
$application = $app->getContainer()->query('OCA\Stempeluhr\Controller\PageController');

$app->getContainer()->getServer()->getRouter()->addRoute([
    'name' => 'page#index',
    'url' => '/',
    'verb' => 'GET',
    'defaults' => [
        '_controller' => 'OCA\Stempeluhr\Controller\PageController::index'
    ]
]);
