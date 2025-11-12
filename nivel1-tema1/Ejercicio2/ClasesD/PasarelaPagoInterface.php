<?php

interface PasarelaPagoInterface
{
    public function enviarPago(float $monto): string;
}

?>