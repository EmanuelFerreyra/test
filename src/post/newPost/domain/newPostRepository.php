<?php


namespace src\post\domain;


interface newPostRepository
{
    public function insertPost( $post ) : void;
}