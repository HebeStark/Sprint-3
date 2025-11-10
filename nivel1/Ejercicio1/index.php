<?php

require_once 'Athlete.php';
require_once 'Event.php';
require_once 'Result.php';
require_once 'OlympicGames.php';

$games = new OlympicGames();

$athlete1 = new Athlete("Usain Bolt", "Jamaica");
$athlete2 = new Athlete("Michael Phelps", "USA");

$event1 = new Event("100m Sprint", "2024-08-01");
$event2 = new Event("Swimming", "2024-08-02");

$result1 = new Result(
    ['name' => $athlete1->getName(), 'country' => $athlete1->getCountry()],
    ['eventName' => $event1->getEventName(), 'date' => $event1->getDate()],
    "Gold"
);

$result2 = new Result(
    ['name' => $athlete2->getName(), 'country' => $athlete2->getCountry()],
    ['eventName' => $event2->getEventName(), 'date' => $event2->getDate()],
    "Gold"
);


$games->addAthlete($athlete1);
$games->addAthlete($athlete2);
$games->addEvent($event1);
$games->addEvent($event2);
$games->addResult($result1);
$games->addResult($result2);

$games->showResults();

?>