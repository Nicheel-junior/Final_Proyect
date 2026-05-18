<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Control de Semillas</title>
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
                <form action="../Procesos/procesarSemillas.php" method="POST">
                    <label for="">Ingrese el área en m<sup>2</sup>:</label>
                    <input type="text" name="area" id="">
                    <br><br>
                    <label for="">Ingrese la distancia en cm entre cada semilla:</label>
                    <input type="text" name="distancia">
                    <br><br>
                    <label for="">Seleccione el tipo cultivo:</label>
                    <select name="tipoCultivo" id="">
                        <option value="">Seleccione el tipo de cultivo:</option>
                        <option value="alfalfa">Alfalfa</option>
                        <option value="maiz">Maiz</option>
                    </select>
                    <br><br>
                    <input type="submit" value="Enviar datos">
                    <br><br>
                    <a href='javascript:history.back()' > Regresar a las opciones de Agropecuario...</a>
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
               <p>Con está calculadora podras ver cuantas semillas necesitaras para plantar un área de m<sup>2</sup> esto colocando el tipo de cultivo, la distancia entre semillas y el área</p>
               <h3>Problematica que Resuelve</h3>
               <p>Al momento de calcular cuantas semillas necesitas es un proceso que puede llegar a tardar bastante, por lo que está calculadora lo hace mucho más sencillo y rápido, algo ideal en caso de no tener mucho tiempo para realizar los cálculos</p>
          </div>
     </aside>
</body>
</html>