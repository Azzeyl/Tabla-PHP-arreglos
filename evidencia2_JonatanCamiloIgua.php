<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia 2</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> <!--ESTILOS DE  google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> <!--ESTILOS DE  google fonts-->

    <style type="text/css"> /*ESTILOS DE CSS DE LA TABLA */
  table { color: black; font-family: Verdana; background-color: #FEFCFF; margin-top: 25px; margin-left: auto; margin-right: auto; }
  tr {font-size: 19px; text-align: center; font-family: 'Oswald', sans-serif;}
  td {padding-left: 10px; padding-right: 10.5px; padding-top: 10px; padding-bottom: 10px;}
  h3 {font-size: 25px ; color: red; text-align: center;}
  h4 {font-size: 25px ; color: red; text-align: center;}

</style>
</head>
<body>

    <?php
    /*
        * JONATAN CAMILO IGUA CONTRERAS.
        *DESARROLLO WEB CON PHP.
        * EVIDENCIA: TALLER " USO DE ARREGLOS ". 
     */
    ?>
    
    <?php

    //DIRECTORIO TELEFONICO.
    //SE CREARON LOS ARRAYS MULTIDIMENCIONALES CON LA INFORMACION.
    $Directorio = array(array('uno'=>'NOMBRE', 'dos'=>'DIRECCION', 'tres'=>'TELEFONO', 'cuatro'=>'FECHA DE CUMPLEAÑOS', 'cinco'=>'COLOR FAVORITO', 'seis'=>'SIGNIFICADO'),
                        array('Nombre'=>'Luis', 'Direccion'=>'CL 78 54P 12', 'Telefono'=>'4587889', 'Fecha de Cumpleaños'=>'4/04/2000', 'Color Favorito'=>'Azul','color1'=>'Sabiduria y paciencia.'),
                        array('Nombre1'=>'Luisa','Direccion'=>'KR 45L 78 20', 'Telefono'=>'27854155', 'Fecha de Cumpleaños'=>'15/08/1988', 'Color Favorito'=>'Rojo', 'color2'=>'Habilidad y astucia.'),
                        array('Nombre2'=>'Daniela','Direccion'=>'CL 125 D 457','Telefono'=>'58975876', 'Fecha de Cumpleaños'=>'7/05/2003', 'Color Favorito'=>'Morado','color3.'=>'No se encuentra el significado.')
                );
    ?>
                <!--TABLA DE DATOS-->
                <h3>TABLA</h3>
                <h4>DIRECTORIO TELEFONICO</h4>

                <?php
               
                    //SE CREO EL ciclo foreach EN DONDE ENTRAMOS PRIMERO A LOS DATOS ($DATOS)
                echo '<table border="6">';
                foreach ($Directorio as $Lista => $Datos){
                    echo '<tr>';
                    
                    //LUEGO SE CREO OTRO foreach EN DONDE DE DATOS ($DATOS) ENTRAMOS AL CONTENIDO DE LOS DATOS.
                    foreach($Datos as $Contenido){
                   
                        echo '<td>'. $Contenido.'</td>'; //Al final imprimimos el contenido que de la informacion de las llaves.
                    }
                    echo '</tr>';
                }
            echo '</table>';

                ?>
</body>
</html>