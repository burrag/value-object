<?php declare(strict_types = 1);

namespace App\ValueObject\Post;

interface IPostFactory
{
    public function create(string $author, string $content, \DateTimeInterface $date): Post;
}
