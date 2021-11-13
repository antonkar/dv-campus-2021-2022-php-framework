<?php

declare(strict_types=1);

namespace Antonkar\ContactUs;

use Antonkar\ContactUs\Controller\Form;

class Router implements \Antonkar\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl === 'contact-us') {
            return Form::class;
        }

        return '';
    }
}
