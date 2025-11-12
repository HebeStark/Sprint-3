<?php

class Event {
    private string $eventName;
    private string $date;

    public function __construct(string $eventName, string $date) {
        $this->eventName = $eventName;
        $this->date = $date;
    }

    public function getEventName(): string {
        return $this->eventName;
    }

    public function getDate(): string {
        return $this->date;
    }

}
?>

