<?php

namespace Contracts\Models;

use Contracts\Models\Post\PostInterface;

interface AuthorInterface
{
    const TABLE ='wp_terms';

    /*
     * return PostInterface[]
     */
    public function posts(): array;
}
