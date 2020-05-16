<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR - DHCP</title>
<head>
<body>

<?php
	
	$ipserver = $_REQUEST["ipserver"];
	$maskserver = $_POST["maskserver"];
	$gateway = $_POST["gateway"];
	$subnet = $_POST["subnet"];
	$submask = $_POST["submask"];
	$range1a = $_POST["range1a"];
	$range1b = $_POST["range1b"];
	$range2a = $_POST["range2a"];
	$range2b = $_POST["range2b"];
	$range3a = $_POST["range3a"];
	$range3b = $_POST["range3b"];
	$range4a = $_POST["range4a"];
	$range4b = $_POST["range4b"];
	$range1 = $_POST["range1"];
	$range2 = $_POST["range2"];
	$range3 = $_POST["range3"];
	$range4 = $_POST["range4"];
	$mlt = $_POST["mlt"];
	
	
	//INSERTAR DATOS EN TXT proximo.txt
	$ar=fopen("proximo.txt","w") or die("Problemas con la creacion");
		fputs($ar,"ddns-update-style none;");
		fputs($ar,"\n");
		fputs($ar,'option domain-name "frsasir.net";');
		fputs($ar,"\n");
		fputs($ar,'option domain-name-servers 192.168.1.1;');
		fputs($ar,"\n");
		fputs($ar,"default-lease-time 600;");
		fputs($ar,"\n");
		fputs($ar,"max-lease-time ".$mlt.';');
		fputs($ar,"\n");
		fputs($ar,"one-lease-per-client on;");
		fputs($ar,"\n");
		fputs($ar,'server-identifier '.$ipserver.';');
		fputs($ar,"\n");
		fputs($ar,'option subnet-mask '.$maskserver.';');
		fputs($ar,"\n");
		fputs($ar,'option routers '.$gateway.';');
		fputs($ar,"\n");
		fputs($ar,'log-facility local7;');
		fputs($ar,"\n");
		fputs($ar,"#");
	if($range1=="on"){
		fputs($ar,"\n");
		fputs($ar,'subnet '.$subnet.' netmask '.$submask);
		fputs($ar,"\n");
		fputs($ar,'{');
		fputs($ar,"\n");
		fputs($ar,'range '.$range1a.' '.$range1b.';');
		fputs($ar,"\n");
	}

	if($range2=="on"){
		fputs($ar,'range '.$range2a.' '.$range2b.';');
		fputs($ar,"\n");
	}
	if($range3=="on"){
		fputs($ar,'range '.$range3a.' '.$range3b.';');
		fputs($ar,"\n");
	}
	if($range4=="on"){
		fputs($ar,'range '.$range4a.' '.$range4b.';');
		fputs($ar,"\n");
	}
		fputs($ar,"}");
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
			<form action="confirmardhcp.php" onsubmit="return validar();" method="post" id="form2" name="form1">
				<fieldset style="color:azure; text-shadow:black;">
					
					<legend>&nbsp;&nbsp;&nbsp; <b><u>Comprueba que los datos son correctos</u></b>&nbsp;<br></legend>
					<br>                                                                                                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div id="formin">
						<b><u>Confirmar cambios:</u></b><br>
						<?php 
							$fp = fopen("/var/www/html/frsasir/proximo.txt", "r");
							while (!feof($fp)){
								$linea = fgets($fp);
								echo $linea;
								echo "<br>";
							}
							fclose($fp);
						?>
					</div>	
					<br/><br/><br/> 
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
