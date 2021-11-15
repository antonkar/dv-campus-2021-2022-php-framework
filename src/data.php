<?php

declare(strict_types=1);

function blogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name'        => 'Sports',
            'url'         => 'sports',
            'posts'    => [1, 2, 3]
        ],
        2 => [
            'category_id' => 2,
            'name'        => 'Politics',
            'url'         => 'politics',
            'posts'    => [3, 4, 5]
        ],
        3 => [
            'category_id' => 3,
            'name'        => 'Gaming',
            'url'         => 'gaming',
            'posts'    => [2, 4, 6]
        ]
    ];
}

function blogGetPost(): array
{
    return [
        1 => [
            'post_id'  => 1,
            'name'        => 'Post 1',
            'url'         => 'post-1',
            'description' => 'Post 1 Description',
            'author'      => 'John Doe',
            'date'        => '30.01.2020'
        ],
        2 => [
            'post_id'  => 2,
            'name'        => 'Post 2',
            'url'         => 'post-2',
            'description' => 'Post 2 Description',
            'author'      => 'Jane Doe',
            'date'        => '15.07.2020'
        ],
        3 => [
            'post_id'  => 3,
            'name'        => 'Post 3',
            'url'         => 'post-3',
            'description' => 'Post 3 Description',
            'author'      => 'John Doe',
            'date'        => '28.04.2020'
        ],
        4 => [
            'post_id'  => 4,
            'name'        => 'Post 4',
            'url'         => 'post-4',
            'description' => 'Post 4 Description',
            'author'      => 'Jane Doe',
            'date'        => '22.03.2020'
        ],
        5 => [
            'post_id'  => 5,
            'name'        => 'Post 5',
            'url'         => 'post-5',
            'description' => 'Post 5 Description',
            'author'      => 'John Doe',
            'date'        => '07.06.2020'
        ],
        6 => [
            'post_id'  => 6,
            'name'        => 'Post 6',
            'url'         => 'post-6',
            'description' => 'Post 6 Description',
            'author'      => 'Jane Doe',
            'date'        => '30.05.2020'
        ]
    ];
}

function blogGetCategoryPost(int $categoryId): array
{
    $categories = blogGetCategory();

    if (!isset($categories[$categoryId])) {
        throw new InvalidArgumentException("Category with ID $categoryId does not exist");
    }

    $postsForCategory = [];
    $posts = blogGetPost();

    foreach ($categories[$categoryId]['posts'] as $postId) {
        if (!isset($posts[$postId])) {
            throw new InvalidArgumentException("Post with ID $postId from category $categoryId does not exist");
        }

        $postsForCategory[] = $posts[$postId];
    }

    return $postsForCategory;
}

function blogGetCategoryByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetCategory(),
        static function ($category) use ($url) {
            return $category['url'] === $url;
        }
    );

    return array_pop($data);
}

function blogGetPostByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetPost(),
        static function ($post) use ($url) {
            return $post['url'] === $url;
        }
    );

    return array_pop($data);
}

function blogGetPostByDate(): array
{
    $sorted = blogGetPost();
    usort($sorted, static function ($b, $a) {
        return strtotime($a['date']) <=> strtotime($b['date']);
    });
    return $sorted;
    //return array_slice($sorted, 0,3); For recent 3 posts instead of all post sorted
}
