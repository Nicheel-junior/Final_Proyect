<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Raciones Diarias</title>
     <link rel="stylesheet" href="../css/stylesProcesarRaciones.css">
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
                    require_once '../Funciones/Texgan.php';

                    echo calcularAlimentoDiario();

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
               <h3>Descripción de la Calculadora</h3>
               <p>Con está calculadora, podrás ver la porción de alimento que le daras a tu bovino o porcino de una manera más rápida, para esto necesitas colocar los días que quieres que calcule, el tipo de ganado y el tipo de alimento</p>
               <h3>Problematica que Resuelve</h3>
               <p>En esté caso, buscamos que calcular la ración que le daras a un bovino o porcino sea más sencilla de calcular, esto debido a que asi ahorras tiempo </p>
          </div>
     </aside>
</body>
</html>