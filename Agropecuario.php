<?php 
    require_once 'validaciones.php';

    function calcularSiembra(){
        $area=$_POST['area'];
        $distancia=$_POST['distancia'];
        $tipoCultivo=$_POST['tipoCultivo'];

        $verificacion = validarDatos($area, 'int');
        if(!$verificacion['valido']){
            echo $verificacion['error']."<br><br>";
            echo $verificacion['return'];
            exit();
        }

        $verificacion = validarDatos($distancia, 'int');
        if(!$verificacion['valido']){
            echo $verificacion['error']."<br><br>";
            echo $verificacion['return'];
            exit();
        }

        $verificacion = validarDatos($tipoCultivo, 'string');
        if(!$verificacion['valido']){
            echo $verificacion['error']."<br><br>";
            echo $verificacion['return'];
            exit();
        }

        switch($tipoCultivo){
            case 'alfalfa':
                $alfalfa = [
                    'semillasPorM2' => 1/(($distancia / 100) ** 2),
                    'pesoUnitario' => 0.0023,
                ];

                $semillas = $area *(10000 / ($distancia*$distancia));
                $pesoTotal = $semillas*$alfalfa['pesoUnitario'];

                $tabla = "<table border='2' cellpadding='10' cellspacing='0'>";
                $tabla .= "    <tr>";
                $tabla .= "        <th colspan='3'>Datos del Cultivo</th>";
                $tabla .= "    </tr>";
                $tabla .= "    <tr>";
                $tabla .= "        <td>Tipo de Cultivo:</td>";
                $tabla .= "        <td>$tipoCultivo</td>";
                $tabla .= "    </tr>";
                $tabla .= "    <tr>";
                $tabla .= "        <td>Area de Siembra:</td>";
                $tabla .= "        <td>" .$area." m<sup>2</sup></td>";
                $tabla .= "    </tr>";
                $tabla .= "    <tr>";
                $tabla .= "        <td>Semillas Necesarias:</td>";
                $tabla .= "        <td>$semillas</td>";
                $tabla .= "    </tr>";
                $tabla .= "    <tr>";
                $tabla .= "        <td>Peso Unitario:</td>";
                $tabla .= "        <td>" .$alfalfa['pesoUnitario']." gramos </td>";
                $tabla .= "    </tr>";
                $tabla .= "    <tr>";
                $tabla .= "        <td>Peso Total:</td>";
                $tabla .= "        <td>" .$pesoTotal." gramos </td>";
                $tabla .= "    </tr>";
                $tabla .= "</table>";

            return $tabla;
            case 'maiz':
                $maiz = [
                    'semillasPorM2' => 7,
                    'pesoUnitario' => 0.35,
                ];
            
                $distanciaMetros = $distancia /100;

                $semillas = $area *(1 / ($distanciaMetros **2));
                $pesoTotal = $semillas*$maiz['pesoUnitario'];

            $tabla = "<table border='2' cellpadding='10' cellspacing='0'>";
            $tabla .= "    <tr>";
            $tabla .= "        <th colspan='3'>Datos del Cultivo</th>";
            $tabla .= "    </tr>";
            $tabla .= "    <tr>";
            $tabla .= "        <td>Tipo de Cultivo:</td>";
            $tabla .= "        <td>$tipoCultivo</td>";
            $tabla .= "    </tr>";
            $tabla .= "    <tr>";
            $tabla .= "        <td>Area de Siembra:</td>";
            $tabla .= "        <td>" .$area." m<sup>2</sup></td>";
            $tabla .= "    </tr>";
            $tabla .= "    <tr>";
            $tabla .= "        <td>Semillas Necesarias:</td>";
            $tabla .= "        <td>$semillas</td>";
            $tabla .= "    </tr>";
            $tabla .= "    <tr>";
            $tabla .= "        <td>Peso Unitario:</td>";
            $tabla .= "        <td>" .$maiz['pesoUnitario']." gramos </td>";
            $tabla .= "    </tr>";
            $tabla .= "    <tr>";
            $tabla .= "        <td>Peso Total:</td>";
            $tabla .= "        <td>" .$pesoTotal." gramos </td>";
            $tabla .= "    </tr>";
            $tabla .= "</table>";

            return $tabla;
        }
    }
?> 
