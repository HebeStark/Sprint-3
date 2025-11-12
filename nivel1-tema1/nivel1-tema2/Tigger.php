<?php
class Tigger {
    private static $instance = null;
    private int $counter = 0;

    private  function __construct() {
        echo "Creando a Tigger..." . "\n";
        
    }
    public static function getInstance() {
    if (self::$instance === null) {
        self::$instance = new self();
    }
    return self::$instance;
}
    public function roar(){
        echo "Grrr!" . "\n";
        $this->counter++;
    }

    public function getCounter(): int{
        return $this->counter;
    }


} 


?>