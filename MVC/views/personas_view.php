<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Encomienda</title>
        <link rel="stylesheet" href="views/style.css">
    </head>
    <body>
    <center>
    <table border="1">
        <tr>
            <td><b> Número</b></td>
            <td><b>Fecha</b></td>
            <td><b>Tipo</td>
            <td><b>Despachante</b></td>
            <td><b>Destinatario</b></td>
            <td><b>Precio</b></td>
        </tr>
		<h1>Listado de encomiendas</h1>
        <?php
			//Recorremos el array para ir mostrando fila a fila los registros
            foreach ($datos as $dato) {
                if($dato["tipo"]=="sobre"){ 
        echo "<tr> 
        <td>" . $dato["numero"]."</td>
        <td> ".$dato["fecha"]."</td>
        <td> ".$dato["tipo"]. "</td>
        <td> " .$dato["despachante"]."</td>
        <td> ".$dato["destinatario"]."</td>
        <td> Precio: $100 </td></tr>";

                }elseif ($dato["tipo"]=="paquete") {
                    echo "<tr> 
                    <td>" . $dato["numero"]."</td>
                    <td> ".$dato["fecha"]."</td>
                    <td> ".$dato["tipo"]. "</td>
                    <td> " .$dato["despachante"]."</td>
                    <td> ".$dato["destinatario"]."</td>
                    <td> Precio: $200 </td></tr>";

                }elseif ($dato["tipo"]=="caja") {
                    echo "<tr> 
        <td>" . $dato["numero"]."</td>
        <td> ".$dato["fecha"]."</td>
        <td> ".$dato["tipo"]. "</td>
        <td> " .$dato["despachante"]."</td>
        <td> ".$dato["destinatario"]."</td>
        <td> Precio: $300 </td></tr>";  
    }
    }
        ?>
        </table>
        </center>
    </body>
</html>