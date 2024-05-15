<?php

declare(strict_types=1);

interface MessageSenderInterface
{
    public function send(string $message, string $senderType): void;
}