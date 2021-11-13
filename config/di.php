<?php

declare(strict_types=1);

return [
    \Antonkar\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
        'routers',
        [
            \DI\get(\Antonkar\Cms\Router::class),
            \DI\get(\Antonkar\Blog\Router::class),
            \DI\get(\Antonkar\ContactUs\Router::class)
        ]

    )

];