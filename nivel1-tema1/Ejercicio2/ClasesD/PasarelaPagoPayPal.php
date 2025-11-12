<?php

require_once 'PasarelaPagoInterface.php';

class PasarelaPagoPayPal implements PasarelaPagoInterface
{
    public function enviarPago(float $monto): string
    {
        return $monto . " pago procesado por PayPal";
    }
}

?>