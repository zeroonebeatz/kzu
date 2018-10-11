<?php

namespace Contracts\Models\Post;

use Contracts\Models\Post\ImageInterface;
use Contracts\Models\Post\GalleryInterface;

interface PostInterface
{
    const TABLE = 'wp_posts';

    /*
     * return CategoryInterface
     */
    public function category(): CategoryInterface;

    public function author(): AuthorInterface;

    /*
     * return ImageInterface[]
     */
    public function images(): array;

    public function gallery(): GalleryInterface;

    /*
     * return VideoInterface[]
     */
    public function videos(): array;
}
