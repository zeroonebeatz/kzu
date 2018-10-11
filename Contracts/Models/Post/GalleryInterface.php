<?php

namespace Contracts\Models\Post;

interface GalleryInterface extends MetaInterface
{
    /*
     * return string[]
     */
    public function images(): array;
}
