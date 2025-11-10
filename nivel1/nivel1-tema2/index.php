<?php
declare(strict_types=1);
require_once 'Tigger.php';

$tigre1 = Tigger::getInstance();
$tigre1->roar();

$tigre2 = Tigger::getInstance();
$tigre2->roar();

echo "Tigger ha rugido " . $tigre1->getCounter() . " veces.";


?>