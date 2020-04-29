<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title>MaestreFestival</title>
<head>
<body>
	<?php
	
	
	$nombre = $_REQUEST["nombre"];
	$dnin = $_POST["dnin"];
	$dnil = $_POST["dnil"];
	$sexo = $_POST["sexo"];
	$curso = $_POST["curso"];
	$ano = $_POST["ano"];
	$asig = $_POST["asig"];
	$dni=$dnin.strtoupper($dnil);
	
	if($sexo==1){
		$sex="Masculino";
	}
	else{
		$sex="Femenino";
	}
	
	//NombreCurso
	if($curso==1){
		$cur="Grado Medio Mecanica";
	}
	elseif($curso==2){
		$cur="Grado Medio Informatica";
	}
	elseif($curso==3){
		$cur="Grado Superior Mecanica";
	}
	elseif($curso==4){
		$cur="Grado Superior Informatica";
	}
	
	//AñoCurso
	if($ano==1){
		$year="1º";
	}
	elseif($ano==2){
		$year="2º";
	}
	
	//INSERTAR DATOS EN TXT registrados.txt
	$ar=fopen("registrados.txt","a") or die("Problemas con la creacion");
		fputs($ar,$nombre);
		fputs($ar,";");
		fputs($ar,$dni);
		fputs($ar,";");
		fputs($ar,$sex);
		fputs($ar,";");
		fputs($ar,$cur);
		fputs($ar,";");
		fputs($ar,$year);
		fputs($ar,";");
		fputs($ar,$asig);
		fputs($ar,"\n");
	fclose($ar);
	echo "Registrado Correctamente";
	?>

	<div id="header" >
		<!-- <img src="images/logofest.png" width="150" height="75"> -->
	<div id="maestre"><img src="images/logofest.png" width="225" height="150" ></div>
		<div class="wrap">
				<p><br />El mejor festival de Ciudad Real dentro de un instituto</p>
			<h1 id="logo"><a href="#">MAESTRE FESTIVAL</a></h1>
			
				<ul id="menu" >
					<li><a class="current" href="index.html">Principal</a></li>
					<li><a href="artistas.html">Artistas 2020</a></li>
					<li><a class="current" href="concurso.php">Concurso Entradas MF</a></li>
					<li><a href="inscritos.php">Alumnos Inscritos</a></li>
					<li class="last"><a href="contacto.html">Contact Us</a></li>
				</ul>
		</div>
	</div>
	
	
	
	<div class="wrap">
		<div id="main">
			<div class="display">
				<h2>MaestreFestival</h2>
				<div id=form >
			<form action="registrar.php" onsubmit="return validar();" method="post" id="form2" name="form1">
				<fieldset>
				<legend>
						&nbsp;&nbsp;&nbsp; Comprueba que los datos son correctos
						<br>
				</legend>
				<br>                                                                                                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Nombre: <?php echo ($_REQUEST["nombre"]); ?>                                                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					DNI: <?php echo ($dni); ?><br/>
					
					<br>               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sexo: 
					<?php echo ($sex); ?> 
					<br>                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Curso: 
					<?php echo ($year); ?>&nbsp; <?php echo ($cur); ?>  </br></br>     
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
					
					Asignaturas Aprobadas (de verdad):  &nbsp;&nbsp;&nbsp;
						<?php echo ($asig); ?>                                                                  &nbsp;&nbsp;&nbsp;<br/><br/><br/>                                                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					 
					 
					 <p align="center">
						<input type="submit" value="REGISTRARSE"/> 
					 </p>
			</form>
				</div>
				
				
				<?php
					//Insertar datos en la bbdd
					$conexion=mysqli_connect("localhost","administrator","toor","maestrefestival") or die ("Error conexion");
					$insertar=mysqli_query($conexion, "insert into alumnos(dni,nombre,sexo,curso,ano,asig) values ('$dni','$nombre','$sex','$cur','$year',$asig)") or die ("Error al insertar alumno nuevo".mysqli_error($conexion));
				system('./apagardns.sh');
				?>
			
			
		
			
			
		</div>
	</div>	
	

















</body>
</html>
