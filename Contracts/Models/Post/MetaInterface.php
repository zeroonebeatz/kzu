<?php

namespace Contracts\Models\Post;

interface MetaInterface
{
    const TABLE = 'wp_postmeta';

    public function post(): PostInterface;

    public function getValue(): string;
}
