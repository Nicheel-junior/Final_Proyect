<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Costos de Ingredientes</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesProcesarCostos.css">
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
                    require_once '../Funciones/PIA.php';

                    echo controlCostos();



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
               <p>Con esta calculadora, podras calcular el costo total de los productos que vayas a usar en tu receta, además del costo por cada ingrediente en base a su cantidad</p>
               <h3>Problematica que Resuelve</h3>
               <p>Realizar los cálculos de manera manual es un proceso tardado, lo que nos puede llegar a retrasar bastante, con está calculadora, podrás ahorrar mucho tiempo, ya que solo tienes que colocar la cantidad, precio unitario y el ingrediente, la calculadora se encarga de hacer e cálculo de manera sencilla y rápida</p>
          </div>
     </aside>
</body>
</html>

