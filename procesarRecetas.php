<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procesando Recetas</title>
    <link rel="stylesheet" href="../css/stylesProcesarCostos.css">
</head>
<body>
     <header>
          <section>
          	<div>
          		<h1>Herramientas Digitales para el Sector Agropecuario y Alimentario</h1>
          		<p>Soluciones a tu carrera con ayuda de calculadoras</p>
          	</div>
          </section>
          <section>
               <a href="../Controles/Formulario.php#texgan">Texgan</a>
               <a href="../Controles/Formulario.php#agro">Agropecuario</a>
               <a href="../Controles/Formulario.php#pia">PIA</a>
          </section>
     </header>
     <main>
     	<h2>Calculo de Alimento</h2>
            <section>
               <?php
                   //nos da indicacion de q se´puede poner varas opciones dentro del array()
                       $recetas = [
                    "Pan" => [
                        "Harina" => 0.70,
                        "Agua" => 0.30,
                        "Sal" => 0.02
                       ],
                    "Pizza" => [
                        "Harina" => 0.65,
                        "Agua" => 0.25,
                        "Sal" => 0.03
                       ]
                       ];

                    $cantidad = $_POST["Cantidad"];
                    $tipo = $_POST["tipo"];

                    if($cantidad == ""){
                         echo "No has colocado la cantidad de kg <br><br>";
                         echo "<a href='javascript:history.back()' > Regresar al formulario anterior...</a>";
                         exit();
                    }
                    if($cantidad < 0){
                         echo "La cantidad de kg está en un rango que no es valido <br><br>";
                         echo "<a href='javascript:history.back()' > Regresar al formulario anterior...</a>";
                         exit();
                    }

                    echo "<table>";
                    echo "<tr>
                            <th>Ingrediente</th>
                            <th>Cantidad</th>
                            <th>Unidad</th>
                          </tr>";
                    foreach($recetas[$tipo] as $ingrediente => $proporcion){
                        $resultado = $cantidad * $proporcion;
                        echo "<tr>";
                        echo "<td>$ingrediente</td>";
                        echo "<td>" . number_format($resultado,2) . "</td>";
                        echo "<td>kg</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    echo "<a href='javascript:history.back()' > Regresar al formulario anterior...</a>" ;
                ?>
            </section>
     </main>
     <aside>
          <h3>Integrantes</h3>
          <div>
               <ul>
               	<li>Fernando Alberto Lomas Hernandez</li>
               	<li>Luz Elena Gonzalez Angel</li>
               	<li>Anette Jimenez Maldonado</li>
               	<li>Jonathan Gonzalez Montalvo</li>
               </ul>
          </div>
          <div>
               <h3>Contexto de la Calculadora</h3>
               <p>Con esta calculadora, podras calcular las cantidades en kg de las recetas que has de utilizar</p>
          </div>
     </aside>
</boby>
</html>
