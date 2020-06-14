<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR - USUARIOS</title>
	
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
				<li><a  href="firewall.php">FIREWALL</a></li>
				<li><a class="current" href="ldap.php">USUARIOS</a></li>
				<li class="last"><a href="../index.html">Salir</a></li>
			</ul>
		</div>
	</div>

	<div class="display">
		<h2>USUARIOS</h2><br>
				<form action="validar.php"  method="post" id="form1" name="form1">
					<fieldset>
						<legend>&nbsp;&nbsp;&nbsp; <b style="color:azure; text-shadow:black;">Usuarios LDAP </b><br></legend>
					
					<br> 
					<div id="formin">  
					<br>
						PROXIMAMENTE....
						<br><br><br>
					</div>						
					</fieldset>		
				</form>
			</div>
		</div>
	</div>

	<br><br><br><br>
	<div id="footer">
		
	</div>



<?php

$credentials = require __DIR__.'/credentials.php';

foreach (glob(__DIR__.'/includes/*.php') as $file) {
	require_once $file;
}

$config = [
	'rootDir'       => __DIR__,
	'password'      => $credentials['password'],
	'title'         => 'SCReddit QDB',
	'enableCaptcha' => $credentials['enableCaptcha'],
	'captchaKey'	=> $credentials['captchaKey'],
	'latest'        => 10,
	'top'           => 25,
	'browsePP'      => 50,
	'random'        => 25,
	'search'        => 25,
];

$app = new Application($config);

$app->connectPostgres($credentials['pgUser'], $credentials['pgPass'], 'qdb');

$app->run();
?>


</body>
</html>
