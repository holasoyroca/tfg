<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR - FIREWALL</title>
	
	<script type="text/javascript">    
    
        function confirmarnft(){
				<?php //exec('cp /var/www/html/frsasir/proximonft.txt /etc/nftables.conf')?>
                window.location.replace("firewall.php");
            }
			confirmarnft();
			
<?php
	
	$filtrado = $_REQUEST["filtrado"];
	$filtra = $_POST["filtra"];
	$textpers = $_POST["textpers"];
	$nat = $_POST["nat"];
	$ifname = $_POST["ifname"];

	


	$ar=fopen("nftfinal.txt","w") or die("Problemas con la creacion");
	fputs($ar,"#! /bin/bash");
	fputs($ar,"\n");
	fputs($ar,"\n");
	fputs($ar,"sudo nft flush ruleset");
	fputs($ar,"\n");
	
	//INSERTAR DATOS EN EL SCRIPT NFTFINAL.SH
																//SI CHECKEA FILTRADOWEB
	if (isset($filtrado)) {
			//alert("hola");
			if ($filtra == "filtrauto") {
				//$ar=fopen("nftfinal.txt","w") or die("Problemas con la creacion");
				
				//$ar=fopen("nftfinal.txt","w") or die("Problemas con la creacion");
					//fputs($ar,"#! /bin/bash");
					fputs($ar,"sudo nft add table ip filtradoweb");
					fputs($ar,"\n");
					fputs($ar,"sudo nft add chain ip filtradoweb denegacionApache {type filter hook prerouting priority 0 \; policy accept\;}");
					fputs($ar,"\n");
					fputs($ar,"sudo nft add rule ip filtradoweb denegacionApache tcp dport 80 drop");
					fputs($ar,"\n");
					fputs($ar,"");
					fputs($ar,"\n");
		} 														//SI CHECKEA LA PERSONALIZADA
		else{

			//$ar=fopen("nftfinal.txt","w") or die("Problemas con la creacion");
				fputs($ar,$textpers);
				
		}
	}															//SI NO CHECKEA FILTRADOWEB
	else{

			//$ar=fopen("nftfinal.txt","w+") or die("Problemas con la creacion");
				fputs($ar," ");
	}
																//SI CHECKEA NAT
	if (isset($nat)) {

			fputs($ar,"\n");
			fputs($ar,"sudo nft add table ip tablaNAT");
			fputs($ar,"\n");
			fputs($ar,"sudo nft add chain ip tablaNAT natEntrada {type nat hook prerouting priority 0 \; policy accept \;}");
			fputs($ar,"\n");
			fputs($ar,"sudo nft add chain ip tablaNAT natSalida {type nat hook postrouting priority 100 \; policy accept \;}");
			fputs($ar,"\n");
			fputs($ar,'sudo nft add rule ip tablaNAT natSalida oifname '.$ifname.' masquerade');
			fputs($ar,"\n");
			
	} 														//SI CHECKEA LA PERSONALIZADA
	else{

				fputs($ar," ");
			
	}
									//SE CIERRA EL SCRIPT
			fputs($ar,"\n");
			fclose($ar);
			
?>
	</script>



</head>
<body>
	<form>
		<input type="button" onclick="confirmarnft();" value="Confirmar">
	</form>
</body>
</html>
