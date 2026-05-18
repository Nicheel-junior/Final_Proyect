<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Calculo de Costos</title>
     <link rel="stylesheet" href="../css/stylesFormularios.css">
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
               <a href="Formulario.php#texgan">Texgan</a>
               <a href="Formulario.php#agro">Agropecuario</a>
               <a href="Formulario.php#pia">PIA</a>
          </section>
     </header>
     <main>
     	<h2>Formulario:</h2>
          <section>
               <form action="../Procesos/procesarRecetas.php" method="POST">
                    <label>Cantidad (Kg)</label>
  	               <input type="number" step="0.01" name="Cantidad">
  	               <br><br>
  	               <label>Tipo de receta</label>
  	               <select name="tipo">
  	               	<option>Seleccione...</option>
  	               	<option>Pizza</option>
  	               	<option>Pan</option>
  	               	<br><br>
  	               </select>
  	               <br><br>
                    <input type="submit" value="Enviar">
               </form>
               <br><br>
               <a href='javascript:history.back()' > Regresar a las opciones de PIA</a>
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
               <p>Lo que hace está calculadora es devolver la cantidad de ingredientes (en kg) para una receta seleccionada por el usuario, esto hace el proceso más rápido y sencillo</p>
               <h3>Problematica que resuelve</h3>
               <p>El tener que ver la cantidad de ingredientes que vamos a usar en una receta es un proceso que puede llegar a resultar díficil para algunos, y para evitar que el estudiante se complique demasiado al realizar este proceso, decidimos crear está calculadora que te dice la cantidad de ingredientes que necesitaras para una receta en base a la cantidad en kg que quieras hacer</p>
          </div>
     </aside>
</body>
</html>