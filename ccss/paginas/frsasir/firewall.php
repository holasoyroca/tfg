<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR - FIREWALL</title>
	
	<script type="text/javascript"> 
	
		function estado(){
				activaChecks();

			}
		
		function activaChecks(){
				document.formnfs.filtrauto.disabled = !document.formnfs.filtrado.checked;
				document.formnfs.filtrapers.disabled = !document.formnfs.filtrado.checked;
				document.formnfs.textpers.disabled = !document.formnfs.filtrapers.checked;

				document.formnfs.ifname.disabled = !document.formnfs.nat.checked;

						
			}	

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
		
	<h1>Terminal</h1>
		<br>
		<?php //exec('sh /var/www/html/frsasir/nftfinal.sh') ?>
		<?php 
				$fp2 = fopen("/var/www/html/frsasir/nftfinal.txt", "r");
				while (!feof($fp2)){
					$linea2 = fgets($fp2);
					echo $linea2;
					echo "<br>";
				}
				fclose($fp2);
		?>
		
		<form action="ejecutarnft.php"  method="post" id="formnexec" name="formexec">
			<strong><b> > </b></strong>
			 <input type="submit" id="ejecutar" value="Ejecutar">
			
		</form>
		
	</div>
	<div class="display">
		<h2>FIREWALL</h2><br>
		<div class="form" >
			<!-- <form action="encender.php" method="post"  id="encenderform" name="encenderform"><input type="submit" value="Encender" name="encender" id="encender"></form>-->
			<div style="background-color: #036464b0;">
				<form action="confirmarnft.php"  method="post" id="formnfs" name="formnfs">
					<fieldset>
						<legend>&nbsp;&nbsp;&nbsp; <b style="color:azure; text-shadow:black;">Configuracion NFSTABLE  </b><br></legend>
						<br> 
						<div id="formin">  
							<br>
							<h1>NFSTABLE</h1>
							<br>
							<input type="checkbox" id="filtrado" name="filtrado" onclick='activaChecks();' /> HABILITAR FILTRADO WEB. <br>
							<sub>(Accede a FRSASIR solo desde red interna.)</sub><br><br>
							<div id="formin2">
								<input type="radio" name="filtra" id="filtrauto" value="filtrauto" onclick='activaChecks();' checked/> AUTOMATICO <sub>Recomendado.</sub> 
								<br><br>
								<input type="radio" name="filtra" value="filtrpers" id="filtrapers" onclick='activaChecks();' /> Avanzado. <br><br>
								<div id="formin2"> <textarea id="textpers" name="textpers" rows="10" cols="40"><?php 
																													$fp2 = fopen("/var/www/html/frsasir/nftejemplo.txt", "r");
																													while (!feof($fp2)){
																														$linea2 = fgets($fp2);
																														echo $linea2;
																													}
																													fclose($fp2);
																													?> </textarea><br> </div>
							</div>
							<br>	
							<hr>
							<br>
							<br>
							<h1>NAT</h1><br>
							<div id="formin2">
								<input type="checkbox" id="nat" name="nat" onclick='activaChecks();' /> HABILITAR FILTRADO WEB. <br>
								<div id="formin2">
								Interfaz:
									<select name="ifname">
										<?php
										$fp = fopen("/var/www/html/frsasir/ifname.txt", "r");
										$value = 1;
										while (!feof($fp)){
										$linea = fgets($fp);
										echo '<option value='.$linea.'>';
										echo $linea;
										echo "</option>";
										}
										fclose($fp);
										?>
									</select><br>
								</div>
							</div>
							<br>
							<br>
							<hr>												
							<div id="logotext"> <input type="submit" value="SIGUIENTE" id="registrarse" name="registrarse"/> </div>
						</div>						
					</fieldset>		
				</form>
			</div>
		</div>
	</div>

	<br><br><br><br>
	<div id="footer">
		
	<b><u>CONFIGURACÓN ACTUAL:</u></b><br><u>/etc/nftables.conf</u><br><br>
			
			<?php 
			
				exec('sudo nft list ruleset > ficheronftables.conf');
				exec('sudo cp ficheronftables.conf /etc/nftables.conf');
				$fp = fopen("/etc/nftables.conf", "r");
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
			








		
			
	</div>
</body>
</html>
