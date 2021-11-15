<?php

declare(strict_types=1);

namespace Antonkar\Cms;

use Antonkar\Cms\Controller\Page;

class Router implements \Antonkar\Framework\Http\RouterInterface
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
