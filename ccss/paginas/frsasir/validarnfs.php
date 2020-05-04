<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>MaestreFestival</title>
<head>
<body>

<?php
	
	$filtrado = $_REQUEST["filtrado"];
	$filtra = $_POST["filtra"];
	$textpers = $_POST["textpers"];
	$nat = $_POST["nat"];
	$ifname = $_POST["ifname"];




	
	//INSERTAR DATOS EN TXT proximonft.txt
																//SI CHECKEA FILTRADOWEB
	if (isset($filtrado)) {

		if ($filtra == "filtrauto") {

    		$ar=fopen("proximonft.txt","w") or die("Problemas con la creacion");
				fputs($ar,"table ip filtradoweb {");
				fputs($ar,"\n");
				fputs($ar,"chain denegacionApache {");
				fputs($ar,"\n");
				fputs($ar,"type filter hook prerouting priority 0; policy accept;");
				fputs($ar,"\n");
				fputs($ar,"type tcp dport http drop");
				fputs($ar,"\n");
				fputs($ar,"}");
				fputs($ar,"\n");
				fputs($ar,"}");
				fputs($ar,"\n");
		} 														//SI CHECKEA LA PERSONALIZADA
		else{

			$ar=fopen("proximonft.txt","w") or die("Problemas con la creacion");
				fputs($ar,$textpers);
				
		}
	}															//SI NO CHECKEA FILTRADOWEB
	else{

			$ar=fopen("proximonft.txt","w") or die("Problemas con la creacion");
				fputs($ar," ");
	}
																//SI CHECKEA NAT
	if (isset($nat)) {

		
			fputs($ar,"table ip tablaNAT {");
			fputs($ar,"\n");
			fputs($ar,"	chain natEntrada {");
			fputs($ar,"\n");
			fputs($ar,"		type nat hook prerouting priority 0; policy accept;");
			fputs($ar,"\n");
			fputs($ar,"	}");
			fputs($ar,"\n");
			fputs($ar,"\n");
			fputs($ar,"	chain natSalida {");
			fputs($ar,"\n");
			fputs($ar,"		type nat hook postrouting priority 100; policy accept;");
			fputs($ar,"\n");
			fputs($ar,'				oifname "'.$ifname.'" masquerade');
			fputs($ar,"\n");
			fputs($ar,"	}");
			fputs($ar,"\n");
			fputs($ar,"}");
			fputs($ar,"\n");
	} 														//SI CHECKEA LA PERSONALIZADA
	else{

				fputs($ar," ");
			
	}

			fputs($ar,"\n");
			fclose($ar);
			
?>






		<div id="header" >
			<div id="maestre"><img src="images/logo.png" width="75" height="50" >
			</div>
			<div class="wrap">
				<h1 id="logotext"><a href="#">FRSASIR</a>
				</h1>
				<ul id="menu" >
					<li><a class="current" href="dhcpd.php">DHCP</a></li>
					<li><a  href="dns.php">DNS</a></li>
					<li><a href="firewall.php">FIREWALL</a></li>
					<li><a href="ldap.php">USUARIOS</a></li>
					<li ><a class="last" href="contacto.html">Contact Us</a></li>
					<li class="last"><a href="index.html">Salir</a></li>
				</ul>
			</div>	
		</div>
	
	
	
	<div class="wrap">
			<div class="display">
				<h2>FRSASIR</h2>
				<div id=form >
			<form action="confirmarnft.php" onsubmit="return validar();" method="post" id="form2" name="form1">
				<fieldset style="color:azure; text-shadow:black;">
					
					<legend>&nbsp;&nbsp;&nbsp; <b><u>Comprueba que los datos son correctos</u></b>&nbsp;<br></legend>
					<br>                                                                                                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div id="formin2">
						<br><b><u>Confirmar cambios:</u></b><br><br><br>
						<div id="formin2">
						<?php 
							$fp = fopen("/var/www/html/frsasir/proximonft.txt", "r");
							while (!feof($fp)){
								$linea = fgets($fp);
								echo $linea;
								echo "<br>";
							}
							fclose($fp);
						?>
						</div>
					</div>	
					<br/>
					<p align="center"><input type="submit" value="CONFIRMAR CONFIGURACION"/> </p>
			</form>
				</div>
					<?php
						//Insertar datos en la bbdd
					//	$conexion=mysqli_connect("localhost","root","","maestrefestival") or die ("Error conexion");
					//	$insertar=mysqli_query($conexion, "insert into alumnos(dni,nombre,sexo,curso,ano,asig) values ('$dni','$nombre','$sex','$cur','$year',$asig)") or die ("Error al insertar alumno nuevo".mysqli_error($conexion));
					?>	
				</div>
				<br>
				
						</div>
	
<br><br><br><br>
</body>
</html>
