<?php

declare(strict_types=1);

require_once "Interfaces/ActivityAdvisorInterface.php";

readonly class ActivityAdvisor implements ActivityAdvisorInterface
{

    public function chooseActivity(array $activities): string
    {
        if (array_key_exists('error', $activities)) {
            die($activities['error']);
        }

        return $activities['activity'];
    }
}
