<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title>MaestreFestival</title>
	
	<script type="text/javascript"> 
		function validar(){
			valido=1
			//Comprobar nombre
			var nom= document.getElementById("nombre").value;
			if(!nom){
				alert ("No has introducido el nombre");
				valido=0
			}
			//validar dni
			var dni= document.getElementById("dnin").value.length;
			if(dni != 8){
				alert ("DNI Incorrecto");
				valido=0
			}
			//Comprobar letra DNI
			var nom= document.getElementById("dnil").value;
			if(!nom){
				alert ("No has introducido la letra del DNI");
				valido=0
			}
			//validar sexo
			sexradio = document.getElementsByName("sexo");
			nsex = 0;
			for(var i=0;i<sexradio.length;i++){
				if (sexradio[i].checked){
					nsex=sexradio[i].value;
					
				}
			}
				if(nsex==0){
					alert("No has marcado el sexo");
					valido=0
				}
			//validar curso
			var curso = document.getElementById("curso").value;
			if (curso==0){
				alert("No has introducido el curso");
				valido=0
			}
			//validar año
			var ano = document.getElementById("ano").value;
			if (ano==0){
				alert("No has introducido el año del curso");
				valido=0
			}
			//validar asignaturas
			asignaturas = document.getElementsByName("asig");
			nasig = 0;
			for(var i=0;i<asignaturas.length;i++){
				if (asignaturas[i].checked){
					nasig=asignaturas[i].value;
				}
			}
				if(nasig==0){
					alert("Te faltan las asignaturas aprobadas");
					valido=0
				}
				
			//validar checkbox
			var isChecked = document.getElementById('condicion').checked;
			if(!isChecked){
				alert('No has aceptado pasartelo bien');
				valido=0
			}
						
			checkifempty()
			return false;
		}
		
		function checkifempty(){
			document.form1.registrarse.disabled=true;
			if (valido==1)
				{   
					document.form1.registrarse.disabled=false;
					alert("Documentacion Valida. Puedes registrarte.");
				}
				else{
					document.form1.registrarse.disabled=true;

				}
		}
		
		function registroo(){
			
		}
	</script>




</head>
<body onload="checkifempty()">



	<div id="header" >
		<!-- <img src="images/logofest.png" width="150" height="75"> -->
	<div id="maestre"><img src="images/logofest.png" width="225" height="150" ></div>
		<div class="wrap">
				<p><br />El mejor festival de Ciudad Real dentro de un instituto</p>
			<h1 id="logo"><a href="#">MAESTRE FESTIVAL</a></h1>
			
				<ul id="menu" >
					<li><a  href="index.html">Principal</a></li>
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
			<form action="validar.php"  method="post" id="form1" name="form1">
				<fieldset>
				<legend>
						&nbsp;&nbsp;&nbsp; Participa en el concurso de las dos entradas
						<br>
				</legend>
				<br>                                                                                                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Nombre: <input type="text" name="nombre" id="nombre" required>                                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					DNI: <input type="number" name="dnin" id="dnin" min="0" max="99999999" value="Solo Numero" > 
					<input type="text" name="dnil" id="dnil" maxlength="1" size="1" ><br/>
					
					<br>               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sexo: 
						<input type="radio" name="sexo" value="1">Masculino                                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="sexo" value="2">Femenino<br>
					<br>                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Curso: 
					<select name="curso" id="curso">
						<option value="0">Curso</option>
						<option value="1">Grado Medio Mecanica</option>
						<option value="2">Grado Medio Informatica</option>
						<option value="3">Grado Superior Mecanica</option>
						<option value="4">Grado Superior Informatica</option>
					</select>                                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<select name="ano" id="ano">
						<option value="0">AÑO</option>
						<option value="1">Primero</option>
						<option value="2">Segundo</option>
					</select>             <br/><br/><br/>                                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Asignaturas Aprobadas (de verdad):                                                                  &nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="1"/>0                                                                 &nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="2"/>1                                                                 &nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="3"/>2                                                                 &nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="4"/>3                                                                 &nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="5"/>4                                                                 &nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="6"/>5                                                                 &nbsp;&nbsp;&nbsp;
						<input type="radio" name="asig" value="7"/>6 o mas                                                                 &nbsp;&nbsp;&nbsp;<br/><br/><br/>                                                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						<input type="checkbox" name="condicion" id="condicion" onclick="checkifempty()"/> &nbsp;&nbsp;&nbsp;Aceptas los terminos que si te toca la entrada debes asistir y pasartelo de miedo.                  &nbsp;&nbsp;&nbsp;</br></br></br>
					 
					 
					 <p align="center">
						<input type="reset" value="LIMPIAR" />
						<input type="button" value="VALIDAR" name="vale" id="vale" onclick="validar();"/>
						<input type="submit" value="REGISTRARSE" id="registrarse" name="registrarse"/> 
					 </p>
			</form>
				</div>
				
				
			
			
		
			
			
		</div>
	</div>	
</body>
</html>