<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Consumo de Agua para Vacas</title>
    <link rel="stylesheet" type="text/css" href="../css/est-cal.css">
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
                    // Agua por vaca (litros)
                    $litrosPorVaca = 50;

                    // Datos del formulario
                    $cantidadVacas = $_POST['cantidad_vacas'];
                    $temperatura = $_POST['temperatura'];

                    if($cantidadVacas == ""){
                        echo "Error, no has colocado la cantidad de vacas<br>";
                        echo "<br><br><a href='javascript:history.back()' > Regresar al formulario anterior</a>";
                        exit();
                    }
                    if($temperatura ==""){
                        echo "Error, no has colocado la temperatura<br>";
                        echo "<br><br><a href='javascript:history.back()' > Regresar al formulario anterior</a>";
                        exit();
                    }
                    if($temperatura <= -10 || $temperatura >=40){
                        echo "La temperatura esta en un rango no valido<br>";
                        echo "<br><br><a href='javascript:history.back()' > Regresar al formulario anterior</a>";
                        exit();
                    }
                    if($cantidadVacas <=0){
                        echo "Cantidad de vacas no valida<br>";
                        echo "<br><br><a href='javascript:history.back()' > Regresar al formulario anterior</a>";
                        exit();
                    }


                    // Calcular el consumo
                    $consumoBase = $cantidadVacas * $litrosPorVaca;

                    // Temperatura aprox
                    if ($temperatura > 30) {
                        $consumoBase *= 1.2; // Aumentar un 20% si la temperatura es mayor a 30°C
                    } else if ($temperatura < 10) {
                        $consumoBase *= 0.8; // Disminuir un 20% si la temperatura es menor a 10°C
                    }

                    // Calcular consumo diario, semanal y mensual
                    $consumoDiario = $consumoBase;
                    $consumoSemanal = $consumoBase * 7;
                    $consumoMensual = $consumoBase * 30;

                    // Mostrar resultados
                    echo "<div>";
                    echo "<h2>Resultados:</h2>";
                    echo "Consumo estimado diario: $consumoDiario litros<br>";
                    echo "Consumo estimado semanal: $consumoSemanal litros<br>";
                    echo "Consumo estimado mensual: $consumoMensual litros<br>";

                    // Recomendación de abastecimiento
                    echo "<h3>Recomendación de abastecimiento:</h3>";
                    if ($consumoDiario > 2000) {
                        echo "Asegúrate de tener suficiente agua disponible para tus vacas.";
                    } else {
                        echo "El consumo de agua es manejable.";
                    }
                    echo "</div>";

                    echo "<br><br><a href='javascript:history.back()' > Regresar al formulario anterior</a>";
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
               <h3>Descripción de la Calculadora</h3>
               <p>Lo que hace está calculadora es obtener el aproximado de agua que consumiran las vacas dependiendo la cantidad de vacas y la temperatura que hay</p>
               <h3>Problematica que Resuelve</h3>
               <p>Con está calculadora, podemos evitar que ocurran cosas como el desabasto de agua para el ganado, ya que con la información que obtienen, nuestros compañeros de la respectiva carrera podran obtener el suministro necesario para evitar problemas como la deshidratación de sus animales</p>
          </div>
     </aside>
</body>
</html>

