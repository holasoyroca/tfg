<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title>MaestreFestival</title>
<head>
<body>
<?php

?>

<div id="header" >
		<!-- <img src="images/logofest.png" width="150" height="75"> -->
	<div id="maestre"><img src="images/logofest.png" width="225" height="150" ></div>
		<div class="wrap">
				<p><br />El mejor festival de Ciudad Real dentro de un instituto</p>
			<h1 id="logo"><a href="#">MAESTRE FESTIVAL</a></h1>
			
				<ul id="menu" >
					<li><a href="index.html">Principal</a></li>
					<li><a href="artistas.html">Artistas 2020</a></li>
					<li><a href="concurso.php">Concurso Entradas MF</a></li>
					<li><a class="current" href="inscritos.php">Alumnos Inscritos</a></li>
					<li class="last"><a href="contacto.html">Contact Us</a></li>
				</ul>
		</div>
	</div>
	
	
	<div class="wrap">
		<div id="main">
			<div class="display">
				<h2>MaestreFestival</h2>
		<div id=form >
			<form action="borrar.php" onsubmit="borrar.php" method="post" id="formlist" name="formlist">
				<fieldset>
				<legend>&nbsp;&nbsp;&nbsp; ELIMINAR ALUMNO</legend>
					<div align="center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<p align="left">Para borrarte de la lista de participantes, solo tienes que escribir tu DNI y pulsar el botón. </p>
					<input type="text" name="dniborrado" id="dniborrado" placeholder="Escribe tu DNI">
					<input type="submit" value="BORRARTE DE LA LISTA" name="borrar" id="borrar"  onclick="borrar.php;"/>
										<p align="center">Obviamente por seguridad, no listamos los DNI de los participantes.  </p>
					
					</div>
			
			</fieldset></form>
		</div></br></br>
		<?php
		$conexion=mysqli_connect("localhost","root","","maestrefestival") 
		or die ("Error conexion");
		$registros=mysqli_query($conexion, "select nombre,sexo,curso,ano from alumnos;") 
		or die ("Problemas en el select:".mysqli_error($conexion));
		echo "<b>LISTA DE ALUMNOS INSCRITOS</b> </br>";
		echo " *********************************************** </br>";
		while ($reg=mysqli_fetch_array($registros))
		{
			echo " Nombre: ".$reg['nombre']."</br>";
			echo " Sexo: ".$reg['sexo']."</br>";
			echo " Curso: ".$reg['ano']."º ".$reg['curso']."</br>";
			echo " *********************************************** </br>";
		}
		?>
			
			
		
		
		
			
			
		</div>
	</div>	
	

</body>
</html>