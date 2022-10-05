
<h1>Detalles del salario</h1>
<?php
   $numero1=$_POST['valor1'];
   $numero2=$_POST['valor2'];
   $sueldoBasico = 600;
   $comision= 0.075 * $numero1;
   $bonificacion = 50 * $numero2;
   $sueldoBruto = $sueldoBasico + $comision + $bonificacion;
   $descuento = 0.11 * $sueldoBruto;
   $sueldoNeto = ($sueldoBruto - $descuento) + $bonificacion;
?>
<p>La comision es: <b><?php echo $comision; ?> </b></p>
<p>La bonificacion es: <b><?php echo $bonificacion; ?> </b></p>
<p>El sueldo bruto es: <b><?php echo $sueldoBruto; ?> </b></p>
<p>El descuento es:  <b><?php echo $descuento; ?> </b></p>
<p>El sueldo neto es: <b><?php echo $sueldoNeto; ?> </b></p>