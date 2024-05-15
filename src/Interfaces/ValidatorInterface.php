<?php

declare(strict_types=1);

interface ValidatorInterface
{
    public function validateArguments(array $argv): array;
    public function validateSystem(): void;
}