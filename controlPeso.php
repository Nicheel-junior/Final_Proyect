<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Control de Peso</title>
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
                <form action="../Procesos/procesarPeso.php" method="POST">
                    <label for="">Ingrese el peso en kg:</label>
                    <input type="text" name="peso" id="">
                    <br><br>
                    <label for="">Seleccione la edad:</label>
                    <input type="text" name="edad">
                    <br><br>
                    <label for="">Ingrese el tipo de ganado:</label>
                    <select name="especie" id="">
                        <option value="">Seleccione su animal:</option>
                        <option value="toro">Toro</option>
                        <option value="cerdo">Cerdo</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Enviar datos">
                    <br><br>
                    <a href='javascript:history.back()' > Regresar a las opciones de Texgan</a>
                </form>
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