<?php


/**
 * Función que realiza a conexión coa Base de Datos
 * @return a conexión se os datos son correctos, erro e sair se son erróneos
 */
function conexionBD ()    {
        
   /* xa temos un conectaDB() ¿?¿?¿? */
    
    try {
        $db = new PDO("mysql:host=localhost;dbname=inventario", 'root', 'abc123.');
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        return($db);
    } catch (PDOException $e) {
        print "<h1>Error: Non é posible conectarse coa Base de Datos</h1>\n";
        exit();
    }
}


function consultaBD()   {
  
    $db = conexionBD();
    $consulta = "SELECT * FROM equipo";
    $resultado = $db->query($consulta);

    
    if  (!$resultado)   {
        echo "Erro na consulta";
        exit();
    }
    else    {
        echo '<table border=1><tr><td>ID</td><td>NOME</td><td>DESC</td><td>IP</td><td>RAM</td></tr>';
        foreach ($resultado as $valor)  {
            echo "<tr><td>".$valor['id']."</td><td>".$valor['nome']."</td><td>".$valor['desc']."</td><td>".$valor['ip']."</td><td>".$valor['ram']."</td></tr>";
        }
        echo '</table>';
    }
        
    
}














?>
