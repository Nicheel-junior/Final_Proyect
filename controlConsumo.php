<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Consumo de Agua</title>
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
                <form method="POST" action="../Procesos/procesarConsumo.php">
                    <br><br>

                    <label for="cantidad_vacas">Cantidad de vacas:</label>
                    <input type="number" name="cantidad_vacas" id="cantidad_vacas"><br>
                    <br>

                    <label for="temperatura">Temperatura ambiente (°C):</label>
                    <input type="number" name="temperatura" id="temperatura"><br><br>

                    <input type="submit" value="Calcular Consumo de Agua">
                </form>
                <br>
                <a href='javascript:history.back()' > Regresar a las opciones de Texgan</a>
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