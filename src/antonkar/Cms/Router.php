<?php

declare(strict_types=1);

namespace antonkar\Cms;

use antonkar\Cms\Controller\Page;

class Router implements \antonkar\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl == '')
        {
            return Page::class;
        }

        return '';

    }
}