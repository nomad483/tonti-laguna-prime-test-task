<?php

declare(strict_types=1);

require_once 'src/ActivityAdvisor.php';
require_once 'src/ApiClient.php';
require_once 'src/MessageSender.php';
require_once 'src/Validator.php';

$validator = new Validator();

$validator->validateSystem();

$apiClient = new ApiClient();
$activityAdvisor = new ActivityAdvisor();
$messageSender = new MessageSender();

[$participants, $type, $senderType] = $validator->validateArguments($argv);

$activity = $apiClient->fetchActivity(intval($participants), $type);
$activityName = $activityAdvisor->chooseActivity($activity);
$messageSender->send($activityName, $senderType);