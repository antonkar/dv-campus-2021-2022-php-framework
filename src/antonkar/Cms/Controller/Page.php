<?php

declare(strict_types=1);

namespace antonkar\Cms\Controller;

use antonkar\Framework\Http\ControllerInterface;

class Page implements ControllerInterface
{
    private \antonkar\Framework\Http\Request $request;

    /**
     * @param \antonkar\Framework\Http\Request $request
     */
    public function __construct(
        \antonkar\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }

    public function execute(): string
    {
        $page = $this->request->getParameter('page') . '.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}