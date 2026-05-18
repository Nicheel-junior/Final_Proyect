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
               <form action="../Procesos/procesarCostos.php" method="POST">
                    <?php
                         require_once '../Funciones/validaciones.php';

                         $cantidad = $_POST['cantidad'];
                         $verificacion = validarDatos($cantidad, 'int');
                         if(!$verificacion['valido']){
                             echo $verificacion['error']."<br><br>";
                             echo $verificacion['return'];
                             exit();
                         }

                         validarDatos($cantidad, 'int');

                         $cantidad=$_POST['cantidad'];
                         for($i=1; $i<=$cantidad; $i++){
                              echo "<input type='text' name='ingrediente[]' placeholder='Ingrediente $i'> ";
                              echo " <input type='text' name='cantidad[]' placeholder='Cantidad $i'> ";
                              echo " <input type='text' name='precioUnitario[]' placeholder='Costo Unitario $i'> <br><br>";
                         }
                    ?>
                    <input type="submit" value="Enviar">
               </form>
               <br><br>
               <a href='javascript:history.back()' > Regresar al ingreso de cantidad de inputs</a>
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