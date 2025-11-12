<?php
class Llave{
    public string $llaves;
    public function __construct(string $llaves) {
        $this->llaves = $llaves;
        
    }

     public function __toString(): string {
        return "Llave de casa: " . $this->llaves;
    }
}
?>