<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pidiendo Cantidad de Ingredientes</title>
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
               <form action="controlCostos.php" method="POST">
                    <label for="">Digite la cantidad de ingredientes a usar:</label>
                    <input type="text" name='cantidad'>
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
               <p>Con esta calculadora, podras calcular el costo total de los productos que vayas a usar en tu receta, además del costo por cada ingrediente en base a su cantidad</p>
               <h3>Problematica que Resuelve</h3>
               <p>Realizar los cálculos de manera manual es un proceso tardado, lo que nos puede llegar a retrasar bastante, con está calculadora, podrás ahorrar mucho tiempo, ya que solo tienes que colocar la cantidad, precio unitario y el ingrediente, la calculadora se encarga de hacer e cálculo de manera sencilla y rápida</p>
          </div>
     </aside>
</body>
</html>