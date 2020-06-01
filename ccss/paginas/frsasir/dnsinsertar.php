<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
    <title>FRSASIR - DNS</title>
    <script type="text/javascript"> 
            window.location.replace("dns.php");
    </script>
<head>
<body>

<?php
	
	$nombreg = $_REQUEST["nombreg"];
	$modo = $_POST["modo"];
	$destinoreg = $_POST["destinoreg"];
	
	
	
	//INSERTAR DATOS EN TXT proximo.txt
	$ar=fopen("/var/cache/bind/db.frsasir.net","a+") or die("Problemas con la creacion");
		fputs($ar,$nombreg." IN ".$modo." ".$destinoreg);
        //fputs($ar,'subnet '.$subnet.' netmask '.$submask);
        //fputs($ar,"\n");


        
		fputs($ar,"\n");
        fclose($ar);
        
?>
<?php exec('sh /var/www/html/frsasir/dnsdocs.sh') ?>
<?php exec('sh /var/www/html/frsasir/invertirdns.sh') ?>

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
	
	
</body>
</html>
