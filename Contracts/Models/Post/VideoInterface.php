<?php

namespace Contracts\Models\Post;

interface VideoInterface extends MetaInterface
{
    public function getUrl(): string;
}
