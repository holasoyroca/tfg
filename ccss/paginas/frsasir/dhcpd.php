<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR</title>
	
	<script type="text/javascript"> 
		
		<?php $ipserver = exec('cat /etc/dhcp/dhcpd.conf| grep server-identifier|cut -d" " -f2|cut -d";" -f1')?>
		<?php $maskserver = exec('cat /etc/dhcp/dhcpd.conf|grep subnet-mask|cut -d" " -f3|cut -d";" -f1')?>
		<?php $gatewayserver = exec('cat /etc/dhcp/dhcpd.conf| grep routers|cut -d" " -f3|cut -d";" -f1')?>
		<?php $ipsubnet = exec('cat /etc/dhcp/dhcpd.conf|grep netmask |cut -d" " -f2')?>
		<?php $masksubnet = exec('cat /etc/dhcp/dhcpd.conf|grep netmask |cut -d" " -f4')?>
		<?php $rango1a = exec('cat /etc/dhcp/dhcpd.conf|grep range|head -1|cut -d" " -f2')?>
		<?php $rango1b = exec('cat /etc/dhcp/dhcpd.conf|grep range|head -1|cut -d" " -f3|cut -d";" -f1')?>
		<?php $maxtime = exec('cat /etc/dhcp/dhcpd.conf|grep max-lease|cut -d" " -f2|cut -d";" -f1')?>
		
		

		<?php exec('sh /var/www/html/frsasir/dhcpdocs.sh') ?>
		<?php exec('sh /var/www/html/frsasir/dhcplease.sh') ?>
		<?php $estado = exec('service isc-dhcp-server status |grep Active:|cut -d" " -f 5')?>

		function encender(){
			var encender = 'on';
		}

		function apagar(){
			var encender = 'off';	
		}

		function estado(){
			activaRango();
			var estado2 = '<?php echo "$estado" ?> ';
			if (estado2 == "inactive "){
					frm = document.forms['apagarform'];
					for(i=0; ele=frm.elements[i]; i++)
					ele.disabled=true;
					deshab();
			}
			else {
					frm = document.forms['encenderform'];
					for(i=0; ele=frm.elements[i]; i++)
					ele.disabled=true;
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
			alert(estado2);
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

			document.form1.range5.disabled = !document.form1.range1.checked;
			document.form1.range5a.disabled = !document.form1.range5.checked;
			document.form1.range5b.disabled = !document.form1.range5.checked;

			document.form1.range6.disabled = !document.form1.range1.checked;
			document.form1.range6a.disabled = !document.form1.range6.checked;
			document.form1.range6b.disabled = !document.form1.range6.checked;

			document.form1.range7.disabled = !document.form1.range1.checked;
			document.form1.range7a.disabled = !document.form1.range7.checked;
			document.form1.range7b.disabled = !document.form1.range7.checked;

			document.form1.range8.disabled = !document.form1.range1.checked;
			document.form1.range8a.disabled = !document.form1.range8.checked;
			document.form1.range8b.disabled = !document.form1.range8.checked;
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
				<li><a class="current" href="dhcpd.php">DHCP</a></li>
				<li><a  href="dns.php">DNS</a></li>
				<li><a href="firewall.php">FIREWALL</a></li>
				<li><a href="ldap.php">USUARIOS</a></li>
				<li class="last"><a href="../index.html">Salir</a></li>
			</ul>
		</div>
	</div>
	<div id="side">
		<b><u>CONFIGURACÓN ACTUAL:</u></b><br>
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
	</div>
	<div class="display">
		<div id="botones1">	
			<br><p>Estado DHCP: <?php echo exec('service isc-dhcp-server status |grep "Active:"|cut -d" " -f 5'); ?></p>
		</div>
		<h2>DHCP</h2><br>
		<div class="form" >
			<form action="encender.php" method="post"  id="encenderform" name="encenderform">
				<input type="submit" value="Encender" name="encender" id="encender">
			</form>
			<form action="apagar.php" method="post"  id="apagarform" name="apagarform">
				<input type="submit" value="Apagar" name="apagar" id="apagar">	
			</form>
			<div style="background-color: #036464b0;">
				<form action="validar.php"  method="post" id="form1" name="form1">
					<fieldset>
						<legend>&nbsp;&nbsp;&nbsp; <b style="color:azure; text-shadow:black;">Configuracion del servidor DHCPD</b><br></legend>
					<br> 
					<div id="formin">  
						<br>
						IP Server: <input type="text" name="ipserver" id="ipserver" required placeholder="IP Servidor" value="<?php echo "$ipserver"; ?>" >  
						<input type="text" name="maskserver" id="maskserver" required  required placeholder="Mascara:" value="<?php echo "$maskserver"; ?>">  <b>*</b> <br>
						GateWay: <input type="text" name="gateway" id="gateway" required placeholder="Puerta de enlace: " value="<?php echo "$gatewayserver"; ?>"> <b>*</b> 
						<br><br>
						<br><br>
						<input type="checkbox" name="range1" id="range1" onclick='activaRango();'/> Activar Subnet <br>
						<br>
						Subnet      <input type="text" name="subnet" id="subnet" placeholder="IP de la SubNet" value="<?php echo "$ipsubnet"; ?>">  
						<input type="text" name="submask" id="submask"  placeholder="Mascara de la SubNet: " value="<?php echo "$masksubnet"; ?>">  <b>*</b> <br>
						<br>	
						Rango IPs 1 #     
						<input type="text" name="range1a" id="range1a" placeholder="Desde: " value="<?php echo "$rango1a"; ?>">  
						<input type="text" name="range1b" id="range1b"  required placeholder="Hasta: " value="<?php echo "$rango1b"; ?>">  <b>*</b> <br>
						Rango IPs 2 #     
						<input type="text" name="range2a" id="range2a" placeholder="Opcional" >  
						<input type="text" name="range2b" id="range2b" placeholder="Opcional" > 
						<input type="checkbox" name="range2" id="range2" onclick='activaRango();' /> Activar rango 2 <br>
						Rango IPs 3 #     
						<input type="text" name="range3a" id="range3a" placeholder="Opcional" >  
						<input type="text" name="range3b" id="range3b" placeholder="Opcional"  > 
						<input type="checkbox" name="range3" id="range3" onclick='activaRango();'/> Activar rango 3 <br>
						Rango IPs 4 #     
						<input type="text" name="range4a" id="range4a" placeholder="Opcional">  
						<input type="text" name="range4b" id="range4b" placeholder="Opcional" > 
						<input type="checkbox" name="range4" id="range4" onclick='activaRango();'/> Activar rango 4 <br>
						Rango IPs 5 #     
						<input type="text" name="range5a" id="range5a" placeholder="Opcional">  
						<input type="text" name="range5b" id="range5b" placeholder="Opcional" > 
						<input type="checkbox" name="range5" id="range5" onclick='activaRango();'/> Activar rango 5 <br>
						Rango IPs 6 #     
						<input type="text" name="range6a" id="range6a" placeholder="Opcional">  
						<input type="text" name="range6b" id="range6b" placeholder="Opcional" > 
						<input type="checkbox" name="range6" id="range6" onclick='activaRango();'/> Activar rango 6 <br>
						Rango IPs 7 #     
						<input type="text" name="range7a" id="range7a" placeholder="Opcional">  
						<input type="text" name="range7b" id="range7b" placeholder="Opcional" > 
						<input type="checkbox" name="range7" id="range7" onclick='activaRango();'/> Activar rango 7 <br>
						Rango IPs 8 #     
						<input type="text" name="range8a" id="range8a" placeholder="Opcional">  
						<input type="text" name="range8b" id="range8b" placeholder="Opcional" > 
						<input type="checkbox" name="range8" id="range8" onclick='activaRango();'/> Activar rango 8 <br>
						<br>


						Maxima Asignacion: <input type="number" name="mlt" id="mlt" placeholder="Max Lease Time " require value="<?php echo "$maxtime"; ?>"> minutos.*
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
