<?php

namespace Contracts\Models\Post;

interface ImageInterface extends MetaInterface
{
    public function getUrl(): string;
}
