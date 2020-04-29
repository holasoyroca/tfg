<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR - FIREWALL</title>
	
	<script type="text/javascript"> 
		
		
	
	</script>




</head>
<body onload="estado();">
	<div id="header" >
		<div id="maestre"><img src="images/logo.png" width="75" height="50" ></div>
		<div class="wrap">
			<h1 id="logotext"><a href="#">FRSASIR</a>
			</h1>
			<ul id="menu" >
				<li><a  href="dhcpd.php">DHCP</a></li>
				<li><a  href="dns.php">DNS</a></li>
				<li><a class="current" href="firewall.php">FIREWALL</a></li>
				<li><a href="ldap.php">USUARIOS</a></li>
				<li ><a class="last" href="contacto.html">Contact Us</a></li>
				<li class="last"><a href="index.html">Salir</a></li>
			</ul>
		</div>
	</div>
	<div id="side">
		<b><u>CONFIGURACÓN ACTUAL:</u></b><br>
			<!--
			<?php 
				$fp = fopen("/var/www/html/frsasir/anteriormente.txt", "r");
				while (!feof($fp)){
					$linea = fgets($fp);
					echo $linea;
					echo "<br>";
				}
				fclose($fp);
			?>
			<form action="dhcpsos.php" method="post"  id="sosform" name="sosform">
				<input type="submit" value="¡SOS!" name="sos" id="sos" style="color:azure;background-color: black; float:right;">
			</form>
			-->
	</div>
	<div class="display">
		<h2>FIREWALL</h2><br>
		<div class="form" >
			<form action="encender.php" method="post"  id="encenderform" name="encenderform">
				<input type="submit" value="Encender" name="encender" id="encender">
			</form>
			<div style="background-color: #036464b0;">
				<form action="validar.php"  method="post" id="form1" name="form1">
					<fieldset>
						<legend>&nbsp;&nbsp;&nbsp; <b style="color:azure; text-shadow:black;">Configuracion NFSTABLE  </b><br></legend>
					<!-- <div id="botones1">	<br><p>Estado: <?php echo exec('service isc-dhcp-server status |grep "Active:"|cut -d" " -f 5'); ?></p></div> -->
					<br> 
					<div id="formin">  
						<br>
						IP Server: <input type="text" name="ipserver" id="ipserver" required placeholder="IP Servidor" >  
						
						<br><br>												
						<div id="logotext"> <input type="submit" value="SIGUIENTE" id="registrarse" name="registrarse"/> </div>
					</div>						
					</fieldset>		
				</form>
			</div>
		</div>
	</div>

	<br><br><br><br>
	<div id="footer">
		<!--
		<h1>Equipos Clientes</h1>
		<br>
		<?php exec('dhcp-lease-list > /var/www/html/frsasir/dhcplease.txt'); ?>
		<?php 
				$fp2 = fopen("/var/www/html/frsasir/dhcplease.txt", "r");
				while (!feof($fp2)){
					$linea2 = fgets($fp2);
					echo $linea2;
					echo "<br>";
				}
				fclose($fp2);
			?>
			-->
			
	</div>





</body>
</html>
