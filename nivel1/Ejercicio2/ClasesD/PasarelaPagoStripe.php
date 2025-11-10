<?php

require_once 'PasarelaPagoInterface.php';

class PasarelaPagoStripe implements PasarelaPagoInterface
{
    public function enviarPago(float $monto): string
    {
        return $monto . " pago procesado con Stripe";
    }
}

?>