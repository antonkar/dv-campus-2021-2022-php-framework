<?php

declare(strict_types=1);

return [
    \antonkar\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
        'routers',
        [
            \DI\get(\antonkar\Cms\Router::class),
            \DI\get(\antonkar\Blog\Router::class),
            \DI\get(\antonkar\ContactUs\Router::class)
        ]

    )

];