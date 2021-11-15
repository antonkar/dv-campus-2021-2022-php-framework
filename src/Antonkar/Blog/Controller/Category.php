<?php

declare(strict_types=1);

namespace Antonkar\Blog\Controller;

use Antonkar\Framework\Http\ControllerInterface;

class Category implements ControllerInterface
{
    private \Antonkar\Framework\Http\Request $request;

    /**
     * @param \Antonkar\Framework\Http\Request $request
     */
    public function __construct(
        \Antonkar\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }

    public function execute(): string
    {
        $data = $this->request->getParameter('category');
        $page = 'category.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}
