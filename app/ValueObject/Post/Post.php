<?php

namespace App\ValueObject\Post;

/**
 * V konstruktoru by nemeli byt zadne validace
 * Pokud by jsme meli neco validovat, tak naimplementujeme IPostFactory nebo udelat pomoci staticke public metody
 * Tentio zpusob muze byt pouzit vsude
 *
 * @author Marek Humpolik <marek.humpolik@inspire.cz>
 */
class Post
{
    /** @var string */
    private $author;

    /** @var string */
    private $content;

    /** @var \DateTimeInterface */
    private $date;

    public function __construct(string $author, string $content, \DateTimeInterface $date)
    {
        $this->author = $author;
        $this->content = $content;
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }
}


