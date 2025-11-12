<?php
require_once 'ProcesadorDePago.php';
require_once 'PasarelaPagoStripe.php';
require_once 'PasarelaPagoPayPal.php';
require_once 'TransferenciaBancaria.php';

$transferencia = new TransferenciaBancaria();
$procesador = new ProcesadorDePago($transferencia);
echo $procesador->procesarPago(500.00) . "\n";

$paypal = new PasarelaPagoPayPal();
$procesador = new ProcesadorDePago($paypal);
echo $procesador->procesarPago(100.00) . "\n";

$stripe = new PasarelaPagoStripe();
$procesador = new ProcesadorDePago($stripe);
echo $procesador->procesarPago(250.00) . "\n";



?>