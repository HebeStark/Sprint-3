<?php
class Smartphone{
    public string $smartphone;
    public function __construct(string $smartphone) {
        $this->smartphone = $smartphone;
    }

     public function __toString(): string {
        return "Smartphone: " . $this->smartphone;
    }
}
?>