<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Calculo de Densidad</title>
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
                <form action="../Procesos/procesarDensidad.php" method="POST">
                    <label>Largo del terreno (m):</label> <input type="number" name='largo' step="0.01" required>
                    <br><br>
                    <label>Ancho del terreno (m):</label> <input type="number" name='ancho' step="0.01" required>
                    <br><br>
                    <label>Cultivo:</label> 
                    <select name='cultivo' required>
                        <option value="">Selecciona</option>
                        <option value="maiz">Maíz</option>
                        <option value="tomate">Tomate</option>
                        <option value="lechuga">Lechuga</option>
                        <option value="frijol">Frijol</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Calcular densidad">
                </form>
                    <br><br>
                    <a href='javascript:history.back()' > Regresar a las opciones de Agropecuario</a>
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