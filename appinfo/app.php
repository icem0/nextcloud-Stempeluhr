<?php

namespace OCA\Stempeluhr\AppInfo;

use OCP\AppFramework\App;
use OCP\Util;
use OCP\Security\CSP\ContentSecurityPolicy;
use OCP\Security\CSP\ContentSecurityPolicyManager;

$app = new App('stempeluhr');
$container = $app->getContainer();

/** @var ContentSecurityPolicyManager $cspManager */
$cspManager = $container->query(ContentSecurityPolicyManager::class);
$policy = new ContentSecurityPolicy();

// Beispiel: Erlaube Skripte nur von der eigenen Domain
$policy->addAllowedScriptDomain('self');

// Weitere Richtlinien können hier hinzugefügt werden
// $policy->addAllowedStyleDomain('self');
// $policy->addAllowedImageDomain('self');

$cspManager->addDefaultPolicy($policy);
