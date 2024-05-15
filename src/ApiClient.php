<?php

declare(strict_types=1);

require_once 'Interfaces/ApiClientInterface.php';

const URL = 'https://www.boredapi.com/api/activity?participants=%s&type=%s';

readonly class ApiClient implements ApiClientInterface
{
    public function fetchActivity(int $participants, string $type): array
    {
        $url = sprintf(URL, $participants, $type);

        $response = file_get_contents($url);

        if (json_validate($response)) {
            return json_decode($response, true);
        }

        return ['error' => 'something went wrong'];
    }
}