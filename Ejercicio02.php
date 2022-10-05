<h1>Detalle de la compra</h1>
<?php
   $numero1=$_POST['valor1'];
   $numero2=$_POST['valor2'];
   
   $descuentoGaseosa = $numero1 * 0.05;
   $precioGaseosa = $numero1 - $descuentoGaseosa;
   $importeCompra = $precioGaseosa * $numero2;
   $incentivo = 2 * $numero2;
   $descuento = 0.07 *  $importeCompra;
   $importePagar = $importeCompra - $descuento;
?>
<p>Precio Actual de la gaseosa  <b><?php echo $numero1; ?></b></p>
<p>Cantidad adquirida <b><?php echo $numero2; ?> </b></p>
<p>La nuevo precio de la gaseosa es (-5%): <b><?php echo $precioGaseosa; ?></b></p>
<p>El importe de la compra es: <b><?php echo $importeCompra; ?> </b></p>
<p>El importe del descuento es (7%): <b><?php echo $descuento; ?> </b></p>
<p>El importe a pagar es:  <b><?php echo $importePagar; ?> </b></p>
<p>El obsequio es: <b><?php echo $incentivo; ?>  caramelos</b></p>