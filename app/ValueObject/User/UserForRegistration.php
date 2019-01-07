<?php

namespace App\ValueObject\User;

/**
 * @author Marek Humpolik <marek.humpolik@inspire.cz>
 */
class UserForRegistration
{
    /** @var string */
    private $login;

    /** @var string */
    private $password;

    /** @var string */
    private $email;

    /** @var string */
    private $name;

    /** @var string */
    private $surname;

    /**
     * @internal
     */
    public function __construct(string $login, string $password, string $email, string $name, string $surname)
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }
}
