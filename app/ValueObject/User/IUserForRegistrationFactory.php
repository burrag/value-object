<?php declare(strict_types = 1);

namespace App\ValueObject\User;

interface IUserForRegistrationFactory
{
    public function create(string $login, string $password, string $email, string $name, string $surname): UserForRegistration;
}
