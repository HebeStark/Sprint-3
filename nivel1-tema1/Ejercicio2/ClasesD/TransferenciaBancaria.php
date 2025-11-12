<?php
require_once 'PasarelaPagoInterface.php';

class TransferenciaBancaria implements PasarelaPagoInterface
{
    public function enviarPago(float $monto): string
    {
        return $monto . " transferencia bancaria realizada";
    }
}


?>