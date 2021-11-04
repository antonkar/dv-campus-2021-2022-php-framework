<?php

declare(strict_types=1);

namespace antonkar\Blog;

use antonkar\Blog\Controller\Category;
use antonkar\Blog\Controller\Post;

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
        require_once '../src/data.php';

        if ($data = blogGetCategoryByUrl($requestUrl)) {
            $this->request->setParameter('category', $data);
            return Category::class;
        }

        if ($data = blogGetPostByUrl($requestUrl)) {
            $this->request->setParameter('post', $data);
            return Post::class;
        }
        return '';
    }
}
