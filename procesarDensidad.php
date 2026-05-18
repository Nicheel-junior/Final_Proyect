<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Densidad de Plantas</title>
    <link rel="stylesheet" href="../css/stylesProcesarDensidad.css">
</head>
<body>
    <header>
          <section>
          		<h1>Herramientas Digitales para el Sector Agropecuario y Alimentario</h1>
          		<p>Soluciones a tu carrera con ayuda de calculadoras</p>
          </section>
          <section>
               <a href="../Controles/Formulario.php#texgan">Texgan</a>
               <a href="../Controles/Formulario.php#agro">Agropecuario</a>
               <a href="../Controles/Formulario.php#pia">PIA</a>
          </section>
     </header>
     <main>
     	<h2>Densidad de plantas</h2>
          <section>
               <?php
                   $largo=$_POST['largo'];
                   $ancho=$_POST['ancho'];
                   $cultivo=$_POST['cultivo'];

                   // Arreglo: cultivo => [densidad_plantas_m2, espaciamiento_cm]
                   $cultivos = [
                       'maiz' => [10, 30], // 10 plantas/m², 30cm
                       'tomate' => [4, 50], // 4 plantas/m², 50cm
                       'lechuga' => [25, 20], // 25 plantas/m², 20cm
                       'frijol' => [15, 25] // 15 plantas/m², 25cm
                   ];

                   if (array_key_exists($cultivo, $cultivos)) {
                       $densidad = $cultivos[$cultivo][0];
                       $espaciamiento_cm = $cultivos[$cultivo][1];
                       $espaciamiento_m = $espaciamiento_cm / 100;

                       // 1. Calcular Área
                       $area = $largo * $ancho;

                       // 2. Total plantas = Área × Densidad
                       $total_plantas = floor($area * $densidad);

                       // 3. Filas = Largo / Espaciamiento
                       $filas = floor($largo / $espaciamiento_m);

                       // 4. Plantas por fila = Ancho / Espaciamiento
                       $plantas_fila = floor($ancho / $espaciamiento_m);

                       echo "<hr>";
                       echo "<h3>Resultados para ". ucfirst($cultivo). "</h3>";
                       echo "<p><strong>Área del terreno:</strong> $area m²</p>";
                       echo "<p><strong>Densidad:</strong> $densidad plantas/m²</p>";
                       echo "<p><strong>Espaciamiento:</strong> $espaciamiento_cm cm</p>";
                       echo "<p><strong>Distribución recomendada:</strong> $filas filas con $plantas_fila plantas cada una</p>";
                       echo "<p><strong>Total plantas:</strong> $total_plantas</p>";

                       echo "<br><a href='javascript:history.back()' > Regresar al formulario anterior...</a>";
                   }
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
               <p>Con esta calculadora, podras obtener la densidad aproximada de tus plantas, haciendo más sencillo este proceso, ahorrando varios cálculos que tendrías que realizar de manera manual</p>
               <h3>Problematica que Soluciona</h3>
               <p>Calcular la densidad que puede llegar a tener una planta puede ser una tarea algo estresante y molesta, con está calculadora hacemos que ese proceso sea mucho más sencillo de realizar, lo que nos ayudara a ahorrar tiempo y evitar estrés innecesario</p>
          </div>
     </aside>
</body>
</html>