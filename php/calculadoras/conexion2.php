<?php

function Connect (){
    $host="localhost";
    $usuario= "root";
    $contrasena ="";
    $dbn="isr";
    $conexion= mysqli_connect($host,$usuario,$contrasena,$dbn);
    return $conexion;
    

}


?>