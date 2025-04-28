<?php

namespace OCA\Stempeluhr\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IRequest;

class PageController extends Controller {

    public function __construct(string $AppName, IRequest $request) {
        parent::__construct($AppName, $request);
    }

    /**
     * @NoAdminRequired
     * @CSRFExemption
     */
    public function index(): TemplateResponse {
        return new TemplateResponse('stempeluhr', 'main');
    }
}
