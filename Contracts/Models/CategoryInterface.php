<?php

namespace Contracts\Models;

use Contracts\Models\Post\PostInterface;

interface CategoryInterface
{
    const TABLE ='wp_terms';

    /*
     * return PostInterface[]
     */
    public function posts(): array;

    public function parent(): CategoryInterface;
}
