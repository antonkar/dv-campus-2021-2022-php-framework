<?php

declare(strict_types=1);

namespace antonkar\Blog\Controller;

use antonkar\Framework\Http\ControllerInterface;

class Post implements ControllerInterface
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
        $data = $this->request->getParameter('post');
        $page = 'post.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}
