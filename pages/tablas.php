<?php
include ('../php/calculadoras/conexion2.php');
$connect= Connect();
//$busqueda= $_POST[''];
$consultabla="SELECT *FROM isr_quincenal";
$resultadoconsulta=mysqli_query($connect, $consultabla);
$consultabla2="SELECT *FROM isr_mensual";
$resultadoconsulta2=mysqli_query($connect, $consultabla2);
$consultabla3="SELECT *FROM isr_anual";
$resultadoconsulta3=mysqli_query($connect, $consultabla3);
$consultabla4="SELECT *FROM isr_semanal";
$resultadoconsulta4=mysqli_query($connect, $consultabla4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
    <?php while($fila= mysqli_fetch_array($resultadoconsulta)) {?>
        <tr>
            <th>Limite inferior</th>
            <td><?php echo $fila['lim_inf'];?></td>
        </tr>
        <tr>
            <th>Limite superior</th>
            <td><?php echo $fila['lim_sup'];?></td>
        </tr>
        <tr>
            <th>Cuota Fija</th>
            <td><?php echo $fila['cou_f'];?></td>
        </tr>
        <tr>
            <th>Porcentaje</th>
            <td><?php echo $fila['porc'];?></td>
        </tr>


     <?php    
    }

        ?>
        

    </table>

    <table>
    <?php while($fila= mysqli_fetch_array($resultadoconsulta2)) {?>
        <tr>
            <th>Limite inferior</th>
            <td><?php echo $fila['lim_inf'];?></td>
        </tr>
        <tr>
            <th>Limite superior</th>
            <td><?php echo $fila['lim_sup'];?></td>
        </tr>
        <tr>
            <th>Cuota Fija</th>
            <td><?php echo $fila['cou_f'];?></td>
        </tr>
        <tr>
            <th>Porcentaje</th>
            <td><?php echo $fila['porc'];?></td>
        </tr>


     <?php    
    }

        ?>
        

    </table>

    <table>
    <?php while($fila= mysqli_fetch_array($resultadoconsulta3)) {?>
        <tr>
            <th>Limite inferior</th>
            <td><?php echo $fila['lim_inf'];?></td>
        </tr>
        <tr>
            <th>Limite superior</th>
            <td><?php echo $fila['lim_sup'];?></td>
        </tr>
        <tr>
            <th>Cuota Fija</th>
            <td><?php echo $fila['cou_f'];?></td>
        </tr>
        <tr>
            <th>Porcentaje</th>
            <td><?php echo $fila['porc'];?></td>
        </tr>


     <?php    
    }

        ?>
        

    </table>

    <table>
    <?php while($fila= mysqli_fetch_array($resultadoconsulta4)) {?>
        <tr>
            <th>Limite inferior</th>
            <td><?php echo $fila['lim_inf'];?></td>
        </tr>
        <tr>
            <th>Limite superior</th>
            <td><?php echo $fila['lim_sup'];?></td>
        </tr>
        <tr>
            <th>Cuota Fija</th>
            <td><?php echo $fila['cou_f'];?></td>
        </tr>
        <tr>
            <th>Porcentaje</th>
            <td><?php echo $fila['porc'];?></td>
        </tr>


     <?php    
    }

        ?>
        

    </table>


<? 
</body>
</html>


