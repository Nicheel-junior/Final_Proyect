<?php 
    require_once 'validaciones.php';//Aqyu lo que estoy haciendo, o más bien lo que hace está funcion, es que puedo usar elementos de un archivo en otro, asi que la funcion de Validar datos que tengo en validaciones 
    //tambien las puedo usar aca

    function calcularAlimentoDiario(){//Me gusta mas hacerlo dentro de funciones, siento que es mas comodo
        $peso=$_POST['peso'];//Pido datos desde dentro de la funcion
        $tipoGanado=$_POST['tipoGanado'];
        $tipoAlimento=$_POST['tipoAlimento'];
        $dias=$_POST['dias'];

        $verificacion = validarDatos($peso, "int");//$verificacion toma el arreglo asociativo que devuelva la funcion validarDatos
        if(!$verificacion['valido']){//si el valor de la llave 'valido' es false se convierte en true con el ! y se activa el mensaje de error
            echo $verificacion['error']."<br><br>";//Imprime el valor de la llave "error"
            echo $verificacion['return']; //emprime el link que retornara al arreglo anterior
            exit();//Funcion para evitar que el codigo siga, asi se detiene en cuanto detecte un error aca
        }

        $verificacion = validarDatos($tipoGanado, "string");//Todas las validaciones son las mismas, solo cambiando la variable y el tipo, asi que no vale la pena explicarlo
        if(!$verificacion['valido']){
            echo $verificacion['error']."<br><br>";
            echo $verificacion['return'];
            exit();
        }

        $verificacion = validarDatos($tipoAlimento, "string");
        if(!$verificacion['valido']){
            echo $verificacion['error']."<br><br>";
            echo $verificacion['return'];
            exit();
        }

        $verificacion = validarDatos($dias, "int");
        if(!$verificacion['valido']){
            echo $verificacion['error']."<br><br>";
            echo $verificacion['return'];
            exit();
        }

        $factor=[//Un arreglo asociativo en donde 'bovino' es la llave de 0.03 y 'porcino' de 0.05
            'bovino' => 0.03,
            'porcino' => 0.05,
            ];

        $alimentoDiario = $peso * $factor[$tipoGanado];//la variable de 'alimentoDiario' es igual a la variable 'peso' multiplicada por el factor que contenga la llave que tiene la variable 'tipoGanado'

        if($tipoAlimento == 'AF' && $tipoGanado == 'bovino'){//Si la variable 'tipoAlimento' es igual a 'AF' (osea Alimento Fresco) y el valor de la llave es igual a 'bovino', la racion diaria anterior se multiplica por 5 
            $alimentoDiario*=5;//Esto se debe al mayor contenido de agua que tiene, lo que significa que se tiene que aumentar 5 veces la racion
        }

        $alimentoTotal = $dias * $alimentoDiario;//El alimento total es igual a la multiplicacion de los dias por el alimento diario
        
        $tabla = "<table border='2' cellpadding='10' cellspacing='1'>";
        $tabla .= "    <tr border='2'>";
        $tabla .= "        <th colspan='2'>Datos del Animal</th>";
        $tabla .= "    </tr>";
        $tabla .= "    <tr>";
        $tabla .= "        <td>Tipo de Ganado</td>";
        $tabla .= "        <td>$tipoGanado </td>";
        $tabla .= "    </tr>";
        $tabla .= "    <tr>";
        $tabla .= "        <td>Peso</td>";
        $tabla .= "        <td>$peso kg</td>";
        $tabla .= "    </tr>";
        $tabla .= "    <tr>";
        $tabla .= "        <td>Tipo de Alimento</td>";
        $tabla .= "        <td>" .$tipoAlimento."</td>";
        $tabla .= "    </tr>";
        $tabla .= "    <tr>";
        $tabla .= "        <td>Alimento Diario</td>";
        $tabla .= "        <td>" .$alimentoDiario." kg</td>";
        $tabla .= "    </tr>";
        $tabla .= "    <tr>";
        $tabla .= "        <td>Alimento Total</td>";
        $tabla .= "        <td>" .$alimentoTotal." kg</td>";
        $tabla .= "    </tr>";
        $tabla .= "</table>";
 
        return $tabla;

        // return "Peso del Animal: $peso | Tipo de Ganado: $tipoGanado | Tipo de Alimento: $tipoAlimento | Alimento diario: $alimentoDiario | Alimento total: $alimentoTotal | Total de dias: $dias";
        //Retorna un string, esto se puede guardar en una variable y usar despues o imprimir en una tabla
    }

    function controlPeso(){
        $peso=$_POST['peso'];//Esto es la misma explicacion que antes, lineas 6-9
        $edad=$_POST['edad'];
        $especie=$_POST['especie'];

        $verificacion = validarDatos($peso, 'int');//La validacion igual, regresar a la linea 11-15 para ver la explicacion
        if(!$verificacion['valido']){
            echo $verificacion['error']."<br><br>";
            echo $verificacion['return'];
            exit();
        }

        $verificacion = validarDatos($edad, 'int');
        if(!$verificacion['valido']){
            echo $verificacion['error']. "<br><br>";
            echo $verificacion['return'];
            exit();
        }

        $verificacion = validarDatos($especie, 'string');
        if(!$verificacion['valido']){
            echo $verificacion['error']. "<br><br>";
            echo $verificacion['return'];
            exit();
        }

        switch($especie){//al ser un select, adenas de dos opciones especificas, es mejor un switch a un if, en este caso use la variable $especie
            case 'toro'://En caso de que la variable contenga 'toro'
                $mensaje = pesoToro($edad, $peso);//Retorna el valor que devuelva la funcion pesoToro()
                break;
            case 'cerdo'://En caso de que la variable contenga 'cerdo'
                $mensaje =  pesoCerdo($edad, $peso);//Retorna el valor que devuelva la funcion PesoCerdo()
                break;
            default:
                $mensaje = null;
        }

        $tabla = "<table border='2' cellpadding='10' cellspacing='0'>";
        $tabla .= "    <tr>";
        $tabla .= "        <th colspan='2'>Datos del Animal</th>";
        $tabla .= "        <th colspan='2'>Evaluación</th>";
        $tabla .= "    </tr>";
        $tabla .= "    <tr>";
        $tabla .= "        <td>Peso</td>";
        $tabla .= "        <td>$peso kg</td>";
        $tabla .= "        <td rowspan='3'> {$mensaje}</td>";
        $tabla .= "    </tr>";
        $tabla .= "    <tr>";
        $tabla .= "        <td>Edad</td>";
        $tabla .= "        <td>$edad meses</td>";
        $tabla .= "    </tr>";
        $tabla .= "    <tr>";
        $tabla .= "        <td>Especie</td>";
        $tabla .= "        <td>" .$especie."</td>";
        $tabla .= "    </tr>";
        $tabla .= "</table>";
 
        return $tabla;
    }
    
    function pesoToro($edad, $peso){
        $rangos = [//Arreglo asociativo que contiene las edades(en meses) minimas y maximas y sus pesos correspondientes
                ['edadMin' => 0, 'edadMax' => 2, 'pesoMin' => 35, 'pesoMax' => 45],
                ['edadMin' => 2, 'edadMax' => 6, 'pesoMin' => 60, 'pesoMax' => 80],
                ['edadMin' => 6, 'edadMax' => 8, 'pesoMin' => 100, 'pesoMax' => 210],
                ['edadMin' => 8, 'edadMax' => 48, 'pesoMin' => 400, 'pesoMax' => 600],
                ['edadMin' => 48, 'edadMax' => 80, 'pesoMin' => 600, 'pesoMax' => 1500],
                ];

        $pesoIdeal = false;//Peso ideal que comienza como false
        foreach ($rangos as $rango) {//for each que recorre el array que contiene los pesos y edades
            if ($edad >= $rango['edadMin'] && $edad < $rango['edadMax'] && $peso >= $rango['pesoMin'] && $peso <= $rango['pesoMax']){//Si las variables de peso y edad llegan a coincidir con alguno de estos
                $pesoIdeal = true;//pesoIdeal se vuelve true 
                break;//Para evitar que se repita hasta el final, terminamos el bucle aqui
            }
        }
        if($pesoIdeal){ //Si peso ideal es igual a true(osea que alguna de las condiciones anteriores se cumplio)
            return $mensaje = "Tu toro tiene un peso ideal para su edad! No es necesario realizar más inspecciones por ahora, lo que demuestra que sus cuidados han sido los adecuados";//se retorna este mensaje
        }
        else{
            return $mensaje = "Tu toro tiene un peso que no es de acuerdo al promedio! Debes verificar su estado de salud! Si este cuenta con desnutrición, recomendamos consultar a algún medico para verificar que tan grave es el problema";//Y en caso de ser false se retorna esto
        }
    }

    function pesoCerdo($edad, $peso){
        $rangos = [//Lo mismo que la tabla anterior, aunque esta vez es de cerdos
                ['edadMin' => 0, 'edadMax' => 2, 'pesoMin' => 1.1, 'pesoMax' => 1.5],
                ['edadMin' => 3, 'edadMax' => 3, 'pesoMin' => 6, 'pesoMax' => 8],
                ['edadMin' => 4, 'edadMax' => 7, 'pesoMin' => 6, 'pesoMax' => 7],
                ['edadMin' => 8, 'edadMax' => 11, 'pesoMin' => 20, 'pesoMax' => 21],
                ['edadMin' => 12, 'edadMax' => 15, 'pesoMin' => 40, 'pesoMax' => 45],
                ['edadMin' => 16, 'edadMax' => 19, 'pesoMin' => 60, 'pesoMax' => 65],
                ['edadMin' => 20, 'edadMax' => 23, 'pesoMin' => 80, 'pesoMax' => 95],
                ['edadMin' => 24, 'edadMax' => 26, 'pesoMin' => 100, 'pesoMax' => 110],
                ];

        $pesoIdeal = false;//creamos la misma variable con el valor de false
        foreach($rangos as $rango){//Un bucle que recorre mi tabla
            if($edad >= $rango['edadMin'] && $edad <= $rango['edadMax'] && $peso >= $rango['pesoMin'] && $peso <= $rango['pesoMax']){//Esto es literalmente lo mismo que el anterior, solo cambia los valores
                $pesoIdeal = true;
                break;
            }
        }

        if($pesoIdeal){
            return $mensaje = "Tu cerdo tiene un peso de acuerdo al promedio";
        }
        else{
            return $mensaje = "Tu cerdo tiene un peso que no es de acuerdo al promedio! Debes verificar su estado de salud!";
        }
    }
?>
