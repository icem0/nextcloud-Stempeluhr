<?php

namespace OCA\Stempeluhr\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
    public function __construct(array $urlParams = []) {
        parent::__construct('stempeluhr', $urlParams);
    }
}