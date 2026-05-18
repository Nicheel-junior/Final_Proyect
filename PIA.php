<?php 
    require_once 'validaciones.php';

    function controlCostos(){
        $ingrediente=$_POST['ingrediente'];
        $cantidad=$_POST['cantidad'];
        $precioUnitario=$_POST['precioUnitario'];

        for($i=0; $i<count($ingrediente); $i++){
            $verificacion = validarDatos($ingrediente[$i], 'string');

            if(!$verificacion['valido']){
                echo $verificacion['error']."<br><br>";
                echo $verificacion['return'];
                exit();
            }
        }

        for($i=0; $i<count($cantidad); $i++){
            $verificacion = validarDatos($cantidad[$i], 'int');

            if(!$verificacion['valido']){
                echo $verificacion['error']."<br><br>";
                echo $verificacion['return'];
                exit();
            }
        }
        

        for($i=0; $i<count($precioUnitario); $i++){
            $verificacion = validarDatos($precioUnitario[$i], 'int');

            if(!$verificacion['valido']){
                echo $verificacion['error']."<br><br>";
                echo $verificacion['return'];
                exit();
            }
        }

        $costos=[];//Creamos un arreglo vacio y sin tamaño, el tamaño depende de cuantos ingredientes tengamos

        for($i=0; $i<count($ingrediente); $i++){
            $costos[] = $cantidad[$i] * $precioUnitario[$i];//Asignamos,
        }

        $costoTotal=0;
        for($i=0; $i<count($costos); $i++){
            $costoTotal +=$costos[$i];
        }

        $tabla = "<table border='2' cellpadding='10' cellspacing='0'>";
        $tabla .= "    <tr>";
        $tabla .= "         <th colspan='4'>Datos de los Productos</th>";
        $tabla .= "    </tr>";
        $tabla .= "<tr>";
        $tabla .=      "<th>Ingredientes</th>";
        $tabla .=      "<th>Cantidades</th>";
        $tabla .=      "<th>Precio por Unidad</th>";
        $tabla .=      "<th>Costo Total</th>";
        $tabla .=  "</tr>";
        for($i=0; $i<count($ingrediente); $i++){
            $tabla .= "<tr>";
            $tabla .=      "<td>$ingrediente[$i]</td>";
            $tabla .=      "<td>$cantidad[$i]</td>";
            $tabla .=      "<td>$precioUnitario[$i]</td>";
            $tabla .=      "<td>$costos[$i]</td>";
            $tabla .= "</tr>";
        }
        $tabla .= "<tr>";
        $tabla .= "    <th colspan='3'>Precio Total de los Productos:</th>";
        $tabla .= "    <td>$costoTotal</td>";
        $tabla .= "</th>";
        $tabla .= "</table>";

        return $tabla;
    }

?>