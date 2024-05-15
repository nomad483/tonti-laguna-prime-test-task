<?php

declare(strict_types=1);

interface ActivityAdvisorInterface
{
    public function chooseActivity(array $activities): string;
}