<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conclusiones de Peso</title>
     <link rel="stylesheet" href="../css/stylesProcPeso.css">
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
     	<h2>Control de Peso</h2>
            <section>
                <?php 
                    require_once '../Funciones/Texgan.php';

                    echo controlPeso();

                    echo "<a href='javascript:history.back()' > Regresar al formulario anterior</a>";
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
               <p>Está calculadora devuelve si el peso de un bovino o porcino está dentro del promedio aceptable en base a su edad y peso, devolviendo una descripcion diferente en caso de que este o no dentro de uno de los casos disponibles</p>
               <h3>Problematica que Resuelve</h3>
               <p>Buscamos que la acción de verificar si el peso de un bovino o porcino es el adecuado sea mucho más sencilla y rápida, debido a que este proceso puede llegar a ser bastante largo con está calculadora el proceso se vuelve uno mucho más rápido</p>
          </div>
     </aside>
</body>
</html>