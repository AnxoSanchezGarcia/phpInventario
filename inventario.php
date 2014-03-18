<?php
    require_once 'funcionsInventario.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Practica con bases de datos</title>
        <meta charset="UTF-8">
    </head>  
    <body>
        <h2>Inventario</h2>
        <?php
            $bd = conexionBD(); //chama á función de conexión coa base de datos!
            echo "conexión realizada con éxito...";
            consultaBD();
            $bd = null;
        ?>

    </body>
</html>

