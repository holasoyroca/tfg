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
					<li><a  href="index.html">Principal</a></li>
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
					<div align="center"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						
						
						
						
					</div>
			</form>
		</div></br></br>
		<?php
		$dniborrar = $_REQUEST["dniborrado"];
		$conexion=mysqli_connect("localhost","administrator","toor","maestrefestival") or die ("Error conexion");
		$registros=mysqli_query($conexion, "delete from alumnos where dni like '$dniborrar';") or die ("Problemas en el select:".mysqli_error($conexion));
		echo "<h2> ALUMNO BORRADO </h2> <br> Vuelve atras para comprobar que ya no estas inscrito."
		?>
						<br><br>
						<div align="center">
						<button> <a href="inscritos.php">Alumnos Inscritos</a>   </button>
						</div>
			
				
				
			
			
		
			
			
		</div>
	</div>	
	

</body>
</html>
