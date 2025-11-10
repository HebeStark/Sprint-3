# Refactorizando ejercico 2

Para esto he creado una interface de Pasarela de pago, luego creo una clase para procesar los pagos donde la declaro como protected y creo una function para procesar el pago.
Inplementando esta interface en la trasferecia bancaria o en las pasarelas de pago tanto de Stripe como de PayPal, esto me permite cumplir con el principio de inversion de dependecias, ya que ahora todas las plataformas de pago,dependen de un procesador de pago seguro, ademas de separar las responsabilidades.

Archivos incluidos:
-PasarelaPagoInterface.php
-PasarelaPagoPayPal.php
-PasarelaPagoStripe.php
-PasarelaDePago.php
-TrasnferenciaBancaria.php
-index.php
