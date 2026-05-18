<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Calculo de Raciones</title>
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
                <form action="../Procesos/procesarRaciones.php" method="POST">
                    <label for="">Ingrese el peso en kg:</label>
                    <input type="text" name="peso" id="">
                    <br><br>
                    <label for="">Ingrese los dias a calcular:</label>
                    <input type="text" name="dias">
                    <br><br>
                    <label for="">Seleccione el tipo de Animal:</label>
                    <select name="tipoGanado" id="">
                        <option value="">Seleccione el tipo de animal:</option>
                        <option value="bovino">Bovino</option>
                        <option value="porcino">Porcino</option>
                    </select>
                    <br><br>
                    <label for="">Seleccione el tipo de alimento:</label>
                    <select name="tipoAlimento" id="">
                        <option value="">Seleccione el tipo de alimento:</option>
                        <option value="AF">Alimento Fresco</option>
                        <option value="AS">Alimento seco</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Enviar datos">
                    <br><br>
                    <a href='javascript:history.back()' > Regresar a las opciones de Texgan...</a>
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
               <p>Con está calculadora, podrás ver la porción de alimento que le daras a tu bovino o porcino de una manera más rápida, para esto necesitas colocar los días que quieres que calcule, el tipo de ganado y el tipo de alimento</p>
               <h3>Problematica que Resuelve</h3>
               <p>En esté caso, buscamos que calcular la ración que le daras a un bovino o porcino sea más sencilla de calcular, esto debido a que asi ahorras tiempo </p>
          </div>
     </aside>
</body>
</html>