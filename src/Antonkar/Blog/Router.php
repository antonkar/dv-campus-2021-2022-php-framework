<?php

declare(strict_types=1);

namespace Antonkar\Blog;

use Antonkar\Blog\Controller\Category;
use Antonkar\Blog\Controller\Post;

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
