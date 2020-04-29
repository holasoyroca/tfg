<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title>MaestreFestival</title>
	
	<script type="text/javascript" src="validarconcurso.js">
			function validacion()
			{
				//if (!document.form1.condicion.checked)
				 // {
					document.form1.registrarse.disabled=true;
				  }
				else
				  {     
					document.form1.registrarse.disabled=false;
				  }
			 
			}
	</script>
</head>
<body>



	<div id="header">
		<div class="wrap">
		<!- poner una imagen del instituto ->
		<h1 id="logo"><a href="#">MAESTRE FESTIVAL</a></h1>
			<p><br />El mejor festival de Ciudad Real dentro de un instituto</p>
		
			<ul id="menu">
				<li><a href="index.html">Principal</a></li>
				<li><a href="#">Artistas 2020</a></li>
				<li><a class="current" href="concurso.php">Concurso Entradas MF</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Videos</a></li>
				<li class="last"><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</div>
	
	
	
	<div class="wrap">
		<div id="main">
			<div class="display">
				<h2>MaestreFestival</h2>
				<div id=form >
				<form action="validarconcurso.js" onsubmit="return validar();" method="post" name="form1">
	<fieldset>
    <legend>
			&nbsp;&nbsp;&nbsp; Participa en el concurso de las dos entradas
			<br>
    </legend>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Nombre: <input type="text" name="nombre" id="nombre" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					DNI: <input type="number" name="dnin" id="dnin" min="0" max="99999999" value="Solo Numero" > 
					<input type="text" name="dnil" id="dnil" maxlength="1" size="1" ><br/>
					
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sexo: 
					<input type="radio" name="sexo" value="1">Masculino &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="sexo" value="2">Femenino
					<br>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Curso: 
					<select name="curso" id="curso">
						<option value="0">Curso</option>
						<option value="1">Grado Medio Mecanica</option>
						<option value="2">Grado Medio Informatica</option>
						<option value="3">Grado Superio Mecanica</option>
						<option value="4">Grado Superio Informatica</option>
						<option value="5">Bachillerato</option>
					</select>  
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;
					<select name="ano" id="ano">
						<option value="0">AÑO</option>
						<option value="1">Primero</option>
						<option value="2">Segundo</option>
					</select>  
					<br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Asignaturas Aprobadas (de verdad): &nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="1"/>0&nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="2"/>1&nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="3"/>2&nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="4"/>3&nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="5"/>4&nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="6"/>5&nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="7"/>6 o mas&nbsp;&nbsp;&nbsp;

					<br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="compromiso" id="compromiso" onclick="validacion()" />&nbsp;&nbsp;&nbsp;
					Aceptas los terminos que si te toca la entrada debes asistir y pasartelo de miedo. &nbsp;&nbsp;&nbsp;
					 </br></br></br>
					 <p align="center">
						<input type="reset" value="LIMPIAR" />
						<input type="submit" value="COMPROBAR DATOS" name="enviar"  /> 
						<input type="submit" value="ENVIAR" name="enviar" /> 
					 </p>
				</form>
				</div>
			
		
			
			
		</div>
	</div>	
</body>
</html>