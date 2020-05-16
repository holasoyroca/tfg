<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR - DNS</title>
	
	<script type="text/javascript"> 
		
		
		<?php exec('sh /var/www/html/frsasir/dnsdocs.sh') ?>
		<?php //exec('sh /var/www/html/frsasir/dhcplease.sh') ?>
		<?php $estadodns = exec('service bind9 status |grep Active:|cut -d" " -f 5');?>

		function encender(){
			var encender = 'on';
		}

		function apagar(){
			var encender = 'off';	
		}

		function estado(){
			activaRango();
			var estadodns2 = '<?php echo "$estadodns" ?> ';
			if (estadodns2 == "inactive "){
					frm = document.forms['apagarform'];
					for(i=0; ele=frm.elements[i]; i++)
					ele.disabled=true;
					deshab();

			}
			else {
					frm = document.forms['encenderform'];
					for(i=0; ele=frm.elements[i]; i++)
					ele.disabled=true;
					//alert("hola");
					hab();
			};
		}	
			function deshab() {
				//alert('deshab2');
				frm = document.forms['form1'];
				for(i=1; ele=frm.elements[i]; i++)
				ele.disabled=true;	
			}
			function hab(){
			//alert('hab2');
			alert(estadodns2);
			}	

function prueba(){
	alert("holas");
	frm = document.forms['pruebadns'];
	for(i=0; ele=frm.elements[i]; i++)
	ele.disabled=true;
}

		function activaRango() {
			document.form1.range2a.disabled = !document.form1.range2.checked;
			document.form1.subnet.disabled = !document.form1.range1.checked;
			document.form1.submask.disabled = !document.form1.range1.checked;
			document.form1.range1a.disabled = !document.form1.range1.checked;
			document.form1.range1b.disabled = !document.form1.range1.checked;

			document.form1.range2.disabled = !document.form1.range1.checked;
			document.form1.range2a.disabled = !document.form1.range2.checked;
			document.form1.range2b.disabled = !document.form1.range2.checked;

			document.form1.range3.disabled = !document.form1.range1.checked;
			document.form1.range3a.disabled = !document.form1.range3.checked;
			document.form1.range3b.disabled = !document.form1.range3.checked;

			document.form1.range4.disabled = !document.form1.range1.checked;
			document.form1.range4a.disabled = !document.form1.range4.checked;
			document.form1.range4b.disabled = !document.form1.range4.checked;
		};
	
	</script>




</head>
<body onload="estado();">
	<div id="header" >
		<div id="maestre"><img src="images/logo.png" width="75" height="50" ></div>
		<div class="wrap">
			<!--	<p><br />El mejor festival de Ciudad Real dentro de un instituto!!!</p>-->
			<h1 id="logotext"><a href="#">FRSASIR</a>
		</h1>
		<ul id="menu" >
			<li><a  href="dhcpd.php">DHCP</a></li>
			<li><a  class="current" href="dns.php">DNS</a></li>
			<li><a href="firewall.php">FIREWALL</a></li>
			<li><a href="ldap.php">USUARIOS</a></li>
			<li ><a class="last" href="contacto.html">Contact Us</a></li>
			<li class="last"><a href="index.html">Salir</a></li>
		</ul>
	</div>
</div>
<div id="side">
	
		<b><u>CONFIGURACÓN ACTUAL:</u></b><br><br>
		<u>PARAMETROS</u>: <br><br>
				<?php //parametros

					$ipserver=`ifconfig | head -2|tail -1|cut -c13-25`;
					$nameserver=`cat /var/cache/bind/db.frsasir.net |grep ORIGIN|cut -d" " -f2`;
					$nversion=`cat /var/cache/bind/db.frsasir.net |grep version|cut -d";" -f1`;
					$timerefresc=`cat /var/cache/bind/db.frsasir.net |grep refresco|cut -d";" -f1`;
					$timereintentos=`cat /var/cache/bind/db.frsasir.net |grep reintentos|cut -d";" -f1`;
					$timeexpira=`cat /var/cache/bind/db.frsasir.net |grep expira|cut -d";" -f1`;
					$timemin=`cat /var/cache/bind/db.frsasir.net |grep minimo|cut -d";" -f1`;
 
					echo ("<u>IP Servidor</u>:  $ipserver <br>");
					echo ("<u>Nombhre Servidor:</u>  $nameserver <br>");
					echo ("<u>Numero de Version</u>: $nversion <br>");
					echo ("<u>Tiempo de refresco</u>: $timerefresc <br>");
					echo ("<u>Tiempo de Reintentos</u>: $timereintentos <br>");
					echo ("<u>Tiempo de caducidad</u>: $timeexpira <br>");
					echo ("<u>Tiempo Minimo</u>: $timemin <br>");

				?><br>
				
			<u>ZONAS</u>: 
				<?php 
					$zonasall=`cat /etc/bind/named.conf.local| wc -l`;
					for ($i = 1; $i <= $zonasall; $i++) {
						$linea=`head -$i /etc/bind/named.conf.local | tail -1`;
						echo ('<option value="'.$linea.'">'.$linea.'</option>');
					}
				?>		<br><br>

			<u>REGISTROS</u>: 
				<?php 
					$registrosall=`cat /var/cache/bind/db.frsasir.net| wc -l`;
					for ($i = 17; $i <= $registrosall; $i++) {
						$linea=`head -$i /var/cache/bind/db.frsasir.net | tail -1`;
						echo ('<option value="'.$linea.'">'.$linea.'</option>');
					}
				?> <br><br>	
				

			<form action="dnssos.php" method="post"  id="sosform" name="sosform">
				<input type="submit" value="¡SOS!" name="sos" id="sos" style="color:azure;background-color: black; float:right;">
			</form>
	</div>
	<div class="display">

<form action="prueba.php" method="post"  id="pruebadns" name="pruebadns">
	<input type="submit" value="funciona" name="pruebadns" id="pruebadns">	
	<a href="apagardns.php"><img src="images/logo.png" width="75" height="50"> </a>
</form>
<input type="checkbox" name="botonprueba" id="botonprueba" onclick='prueba();' />




		<div id="botones1">	
			<br><p>Estado DNS: <?php echo exec('service bind9 status |grep "Active:"|cut -d" " -f 5'); ?></p>
		</div>
		<h2>DNS</h2><br>
		<div class="form" >
			<form action="encenderdns.php" method="post"  id="encenderform" name="encenderform">
				<input type="submit" value="Encender" name="encenderdns" id="encenderdns">
			</form>
			<form action="apagardns.php" method="post"  id="apagarform" name="apagarform">
				<input type="submit" value="Apagar" name="apagardns" id="apagardns">	
			</form>
			<a style="color:black;"  href="reiniciardns.php">REINICIAR DNS</a>
			<div style="background-color: #036464b0;">
			<form action="dnsinsertar.php"  method="post" id="forminsert" name="forminsert">
					<fieldset>
						<legend>&nbsp;&nbsp;&nbsp; <b style="color:azure; text-shadow:black;">Configuracion del servidor DNS</b><br></legend>
					<br> 
					<div id="formin">  
						
						NUMERO DE REGISTROS
						<h3>CONTAR</h3>
						<?php $nregistros = exec("awk 'NR>=15&&NR<=40' /var/cache/bind/db.frsasir.net|wc -l");?>
						<br>Hay	<?php echo($nregistros); ?> en el servidor DNS. <br><br>	

				<h3>INSERTAR REGISTRO</h3>
					
						<table style="width:100%; text-align: center;">
							<tr>
								<td style="width:20%;background-color:azure;">Nombre</td>
								<td style="width:5%;background-color:azure;">Internet</td>
								<td style="width:5%;background-color:azure;">Enlace</td>
								<td style="width:10%;background-color:azure;">IP</td>
								<td style="width:20%;"></td>
							</tr>
							<tr>
								<td style="width:20%;background-color:azure;">
										<input type="text" id="nombreg" name="nombreg" placeholder="Nombre del Registro">
									</td>
								<td style="width:5%;background-color:azure;">
										IN
									</td>
								<td style="width:5%;background-color:azure;">
										<select name="modo" id="modo">
											<option value="NS" selected >NS</option>
											<option value="A" selected >A</option>
											<option value="MX" selected >MX</option>
											<option value="CNAME" selected >CNAME</option>
											<option value="PTR" selected >PTR</option>
										</select>
									</td>
								
								<td style="width:5%;background-color:azure;">
										<input type="text" id="destinoreg" name="destinoreg" placeholder="Nombre del Registro">
									</td>
							</tr>
						</table>
						<div id="botones2">
							<input type="submit" id="inserreg" name="inserreg" value="INSERTAR">
						</div>
								<br><br>
					</form>

				<h3>BORRAR REGISTRO</h3>
				<form action="dnsborrar.php"  method="post" id="formborra" name="formborra">
				Selecciona el registro que quiere borrar:     > 
						<select id="borrareg" name="borrareg" value="Selecciona" aria-placeholder="Borrar Registro">
							<option value="" disabled selected hidden>Elige Registro</option>
								<?php
									$primerreg=`cat /var/cache/bind/db.frsasir.net |grep -n Registros:|cut -d":" -f1`;
									$finaldoc=`cat /var/cache/bind/db.frsasir.net| wc -l`;
									for ($i = 17; $i <= $finaldoc; $i++) {
										$linea=`head -$i /var/cache/bind/db.frsasir.net | tail -1`;
										echo ('<option value="'.$linea.'">'.$linea.'</option>');
									}
								?>
						</select> <
						<div id="botones2">
							<input type="submit" id="botonborrar" name="botonborrar" value="BORRAR">	
						</div>
					</form>					
					

















						
						
						
						
						
						
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						
					</div>						
					</fieldset>		
			</div>
		</div>
	</div>

	<br><br><br><br>
	<div id="footer">
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
		
			
	</div>





</body>
</html>
