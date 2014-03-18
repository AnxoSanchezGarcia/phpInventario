<?php require_once 'funciones_bd.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Inventario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>INVENTARIO</div>
        <div>
        <a href="formulario_nuevo_equipo.php">Nuevo Equipo</a>
        </div>
        <?php
            /* conectamos coa base de datos
             * facemos a consulta
             * SE DA RESULTADO imprimimos os equipos nunha táboa, se non ERRO
             */
            $bd = conectaBd();
            $consulta = "SELECT * FROM equipo";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                echo "Error en la consulta";
            } else {
                echo '<table border=1><tr><td>ID</td><td>NOME</td><td>DESC</td><td>IP</td><td>RAM</td></tr>';
                foreach ($resultado as $valor)  {
                    echo "<tr><td>".$valor['id']."</td><td>".$valor['nome']."</td><td>".$valor['desc']."</td><td>".$valor['ip']."</td><td>".$valor['ram']."</td></tr>";
                }
                echo '</table>';
            }
            
            $bd = null;
        ?>    
    </body>
</html>