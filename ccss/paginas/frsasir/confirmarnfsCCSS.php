<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR - FIREWALL</title>
	
	<script type="text/javascript">    
    
        function confirmardhcp(){
				<?php exec('cp /var/www/html/frsasir/proximonft.txt /etc/nftables.conf')?>
                window.location.replace("firewall.php");
            }
            confirmardhcp();
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
	</script>



</head>
</html>
