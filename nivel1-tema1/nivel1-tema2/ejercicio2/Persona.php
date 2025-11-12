<?php
require_once 'Llave.php';
require_once 'LlaveCoche.php';
require_once 'Smartphone.php';
require_once 'Cartera.php';

class Persona{
public Llave $llaveCasa;
public LlaveCoche $llaveCoche;
public Smartphone $smartphone;
public Cartera $cartera;

    public function __construct(Llave $llaveCasa, LlaveCoche $llaveCoche, Smartphone $smartphone, Cartera $cartera){
        $this->llaveCasa = $llaveCasa;
        $this->llaveCoche = $llaveCoche;
        $this->smartphone = $smartphone;
        $this->cartera = $cartera;
        
    }

    public function getLlaveCasa(): Llave {
        return $this->llaveCasa;
    }
    public function getLlaveCoche(): LlaveCoche{
        return $this->llaveCoche;
    }
    public function getSmartphone(): Smartphone{
        return $this->smartphone;
    }
    public function getCartera(): Cartera{
        return $this->cartera;
    }        

    public function __toString(): string {
        return "Llevo: " .  $this->llaveCasa . ", " . $this->llaveCoche .", " . 
        $this->smartphone . ", " . $this->cartera . ".";
    }
}
?>