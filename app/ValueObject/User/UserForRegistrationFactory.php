<?php

namespace App\ValueObject\User;

use Nette\Database\Context;
use Nette\InvalidArgumentException;
use Nette\Utils\Validators;

/**
 * muzes zde mit zavislosti, takze muzes napr koukat do DB, udelat si validador a predavat mu data na validaci
 * Tentio zpusob muze byt pouzit vsude
 *
 * @author Marek Humpolik <marek.humpolik@inspire.cz>
 */
class UserForRegistrationFactory implements IUserForRegistrationFactory
{
    /** @var Context */
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function create(string $login, string $password, string $email, string $name, string $surname): UserForRegistration
    {
        Validators::assert($login, 'string:6..');

        if (false === Validators::isEmail($email) || $this->context->query('SELECT 1 FROM user WHERE email = ?', $email)) {
            throw new InvalidArgumentException('User with same email exists');
        }

        return new UserForRegistration($email, $password, $email, $name, $surname);
    }
}
