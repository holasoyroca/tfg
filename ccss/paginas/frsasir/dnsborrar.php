<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
    <title>FRSASIR - DHCP</title>
    <script>
    
</script>
<head>
<body>
<script type="text/javascript"> 
        function borrar(){
            window.location.replace("dns.php");
                }
               borrar();
</script>
<?php
    $borrareg = $_REQUEST["borrareg"];
    echo ("registro:");
    echo ("$borrareg");
    echo ("<br>");
    echo ("<br>");
    echo ("<br>");
    $palabra = $borrareg;

    $linea = "error";

    $palabra = "echo $borrareg |cut -d' ' -f1 ";
        echo ("La variante palabra: ");
        echo ($palabra);
    $palabra3 = exec("$palabra");
    exec("$palabra");
        echo ("<br>");
        echo ("La variante palabra despues de exec: ");
        echo ($palabra3);
        echo ("<br><br>");
    
    

    $prueba = "rm temp.txt; grep -v \"$palabra3\" /var/cache/bind/db.frsasir.net  >> temp.txt; cp temp.txt /var/cache/bind/db.frsasir.net";
        echo ("La variante prueba: ");
        echo ($prueba);
    exec("$prueba");
    





    

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
	
	
	
	
	
<br><br><br><br>
</body>
</html>

