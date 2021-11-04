<?php

declare(strict_types=1);

namespace antonkar\Cms\Controller;

use antonkar\Framework\Http\ControllerInterface;

class Page implements ControllerInterface
{

    public function execute(): string
    {
        $page = 'home.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}