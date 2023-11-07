<?php
include ('conexion2.php');
$connect= Connect();
$busqueda= 22;
/*$consultabla="SELECT *FROM isr_quincenal";
$resultadoconsulta=mysqli_query($connect, $consultabla);
while($fila= mysqli_fetch_array($resultadoconsulta)){
echo $fila['lim_inf'];
echo $fila['lim_sup'];
echo $fila['cou_f'];
echo $fila['porc'];
*/
if($busqueda ){
}
$consultabla2="SELECT * FROM isr_mensual WHERE $busqueda >= lim_inf AND  lim_sup  >= $busqueda; ";
$resultadoconsulta2=mysqli_query($connect, $consultabla2);
while($fila= mysqli_fetch_array($resultadoconsulta2)){
echo $fila['lim_inf'];
echo $fila['lim_sup'];
echo $fila['cou_f'];
echo $fila['porc'];
}

/*if($busqueda ){
}

$consultabla4="SELECT *FROM isr_semanal";
$resultadoconsulta4=mysqli_query($connect, $consultabla4);
while($fila= mysqli_fetch_array($resultadoconsulta4)){
echo $fila['lim_inf'];
echo $fila['lim_sup'];
echo $fila['cou_f'];
echo $fila['porc'];
}

if($busqueda ){
}

$consultabla3="SELECT *FROM isr_anual";
$resultadoconsulta3=mysqli_query($connect, $consultabla3);
while($fila= mysqli_fetch_array($resultadoconsulta3)){
echo $fila['lim_inf'];
echo $fila['lim_sup'];
echo $fila['cou_f'];
echo $fila['porc'];
}

if($busqueda ){
}
*/





?>