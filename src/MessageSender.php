<?php

declare(strict_types=1);

use JetBrains\PhpStorm\NoReturn;

require_once 'Interfaces/MessageSenderInterface.php';

readonly class MessageSender implements MessageSenderInterface
{

    public function send(string $message, string $senderType): void
    {
        if ($senderType == 'file') {
           $this->sendToFile($message);
        }

        if ($senderType == 'console') {
            $this->sendToConsole($message);
        }
    }

    private function sendToFile(string $message): void
    {
        try {
            $filename = 'activity.txt';
            file_put_contents($filename, $message . PHP_EOL, FILE_APPEND);
            echo "Activity has been saved to $filename\n";
            die(1);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    #[NoReturn] private function sendToConsole(string $message): void
    {
        echo "Recommended activity: $message\n";
        die(1);
    }
}