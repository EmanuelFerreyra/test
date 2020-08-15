<?php


namespace src\post\domain;


class newPost
{
    protected array $post;

    public function __construct( array $post = [])
    {
        $this->post = $post;
    }

}