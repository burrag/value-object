<?php

namespace App\ValueObject\Meeting;

use Nette\Database\Row;

/**
 * Objekty, ktere nepotrebuji slozitou validaci
 * U tohoto nemuze byt tovarnicka, protoze konstruktor je private
 *
 * @author Marek Humpolik <marek.humpolik@inspire.cz>
 */
class Meeting
{
    /** @var string */
    private $address;

    /** @var \DateTimeInterface */
    private $date;

    /** @var string|null */
    private $note;

    private function __construct(string $address, \DateTimeInterface $date, ?string $note)
    {
        $this->address = $address;
        $this->date = $date;
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param string|null $note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    public static function createFromForm(array $values): self
    {
        return new self($values['address'], $values['date'], $values['note'] ?? null);
    }

    public static function createFromDatabase(Row $row): self
    {
        return new self($row->address, $row->date, $row->note);
    }
}
