<?php

declare(strict_types=1);

namespace antonkar\Cms;

use antonkar\Cms\Controller\Page;

class Router implements \antonkar\Framework\Http\RouterInterface
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

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        $cmsPage = [
            '',
            'test-demo-page'
        ];

        if (in_array($requestUrl, $cmsPage)) {
            $this->request->setParameter('page', $requestUrl ?: 'home');
            return Page::class;
        }

        return '';
    }
}
