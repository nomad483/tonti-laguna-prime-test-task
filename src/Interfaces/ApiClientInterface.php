<?php

declare(strict_types=1);

interface ApiClientInterface
{
    public function fetchActivity(int $participants, string $type): array;
}