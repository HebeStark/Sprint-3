<?php
class OlympicGames {
    private array $athletes = [];
    private array $events = [];
    private array $results = [];

    public function addAthlete(Athlete $athlete): void {
    $this->athletes[] = [
        'name' => $athlete->getName(),
        'country' => $athlete->getCountry()
    ];
}

public function addEvent(Event $event): void {
    $this->events[] = [
        'eventName' => $event->getEventName(),
        'date' => $event->getDate()
    ];
}


    public function addResult(Result $result): void {
        $this->results[] = $result;
    }

    public function showResults(): void {
        echo "Olympic Games Results\n";

        foreach ($this->results as $result) {
            $athlete = $result->getAthlete();
            $event = $result->getEvent();
            $medal = $result->getMedal();

            echo $athlete['name'] . " (" . $athlete['country'] . ")";
            echo " won " . $medal;
            echo " in " . $event['eventName'] . " (" . $event['date'] . ")\n";
        }
    }
}
?>
