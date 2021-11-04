<?php

declare(strict_types=1);

namespace antonkar\ContactUs;

use antonkar\ContactUs\Controller\Form;

class Router implements \antonkar\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl === 'contact-us')
        {
            return Form::class;
        }

        return '';

    }
}