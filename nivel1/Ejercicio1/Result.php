<?php

class Result {
    private array $athlete; 
    private array $event;   
    private string $medal;

    public function __construct(array $athlete, array $event, string $medal) {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->medal = $medal;
    }

    public function getAthlete(): array {
        return $this->athlete;
    }

    public function getEvent(): array {
        return $this->event;
    }

    public function getMedal(): string {
        return $this->medal;
    }
}
?>



















