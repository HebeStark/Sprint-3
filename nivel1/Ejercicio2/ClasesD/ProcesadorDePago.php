<?php

require_once 'PasarelaPagoInterface.php';

class ProcesadorDePago
{
    protected PasarelaPagoInterface $pasarela;

    public function __construct(PasarelaPagoInterface $pasarela)
    {
        $this->pasarela = $pasarela;
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->pasarela->enviarPago($cantidad);
    }
}

?>