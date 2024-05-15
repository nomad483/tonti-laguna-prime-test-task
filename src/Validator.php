<?php

declare(strict_types=1);

use JetBrains\PhpStorm\NoReturn;

require_once "Interfaces/ValidatorInterface.php";

readonly class Validator implements ValidatorInterface
{
    public array $validTypes;
    public array $validSenderTypes;

    public function __construct()
    {
        $this->validTypes = [
            "education",
            "recreational",
            "social",
            "diy",
            "charity",
            "cooking",
            "relaxation",
            "music",
            "busywork"
        ];

        $this->validSenderTypes = ['file', 'console'];
    }

    public function validateArguments(array $argv): array
    {
        $participants = array_key_exists(1, $argv) ? $argv[1] : null;
        $type = array_key_exists(2, $argv) ? $argv[2] : null;
        $senderType = array_key_exists(3, $argv) ? $argv[3] : null;

        if (!in_array($participants, range(0,8))) {
            die("Invalid participants, expected participants from 0 to 8, got $participants");
        }

        if (!in_array($type, $this->validTypes)) {
            $stringOfValidTypes = implode(', ', $this->validTypes);
            die("Invalid type, valid types: $stringOfValidTypes");
        }

        if (empty($senderType)) {
            $senderType = $this->validSenderTypes[1];
        }

        if (!in_array($senderType, $this->validSenderTypes)) {
            $stringOfValidSenderTypes = implode(', ', $this->validSenderTypes);
            die("Invalid sender type, valid sender types: $stringOfValidSenderTypes");
        }

        return [$participants, $type, $senderType];
    }

   public function validateSystem(): void
    {
        $validatedVersion = version_compare("8.3.0", phpversion());

        if ($validatedVersion > 0) {
            die('Invalid php version, supported versions are 8.3 and higher.');
        }
    }
}