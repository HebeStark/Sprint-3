<?php
require_once 'Persona.php';

$llave = new Llave('Llavero');
$cartera = new Cartera('Cartera negra');
$llaveCoche = new LlaveCoche('ford fiesta');
$smartphone = new Smartphone('iphone 15');
$persona = new Persona($llave,$llaveCoche,$smartphone,$cartera);

echo $persona;
 
?>