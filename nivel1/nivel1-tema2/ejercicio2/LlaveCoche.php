<?php
class LlaveCoche{
    public string $llaveCoche;
    public function __construct(string $llaveCoche) {
        $this->llaveCoche = $llaveCoche;
    }

    public function __toString(): string {
        return "Llave del coche: " . $this->llaveCoche;
    }
}
?>