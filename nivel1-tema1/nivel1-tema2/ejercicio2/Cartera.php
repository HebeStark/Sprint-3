<?php
class Cartera{
    public string $cartera;
    public function __construct(string $cartera) {
        $this->cartera = $cartera;
    }

     public function __toString(): string {
        return "Cartera: " . $this->cartera;
    }
}
?>