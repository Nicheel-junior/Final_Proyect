<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cantidad de semillas</title>
     <link rel="stylesheet" href="../css/stylesProcesaSemillas.css">
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
     	<h2>Calculo de Alimento</h2>
            <section>
                <?php 
                    require_once '../Funciones/Agropecuario.php';

                    echo calcularSiembra();

                    echo "<br><br><a href='javascript:history.back()' > Regresar al formulario anterior...</a>" ;
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
               <p>Con está calculadora podras ver cuantas semillas necesitaras para plantar un área de m<sup>2</sup> esto colocando el tipo de cultivo, la distancia entre semillas y el área</p>
               <h3>Problematica que Resuelve</h3>
               <p>Al momento de calcular cuantas semillas necesitas es un proceso que puede llegar a tardar bastante, por lo que está calculadora lo hace mucho más sencillo y rápido, algo ideal en caso de no tener mucho tiempo para realizar los cálculos</p>
          </div>
     </aside>
</body>
</html>