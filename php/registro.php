<?php
    include("conexion.php");
    $connect = conectar();

    $nombres= $_POST['nombres'];
    $apellidom= $_POST['apellido_m'];
    $apellidop= $_POST['apellido_p'];
    $correo= $_POST['correo'];
    $genero= $_POST['genero'];
    $date= $_POST['date'];
    echo $date;

    $peticion= "INSERT INTO registro (id_registro,id_usuario,nombres,apellido_p,apellido_m,correo,genero,fecha_nacim) VALUES (NULL,0,'$nombres','$apellidom','$apellidop','$correo','$genero','$date')";
    $resultado= mysqli_query($connect, $peticion);
    if($resultado){
        
        echo "<script>alert('registro exitoso'); window.location.href = '../pages/login.html';</script>";

    } else {
        echo "<script>alert('error en el registro'); window.location.href = '../pages/registrate.html';</script>";
    } 
?>