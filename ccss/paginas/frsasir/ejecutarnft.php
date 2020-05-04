<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR - FIREWALL</title>
	
	<?php  exec('cp /var/www/html/frsasir/nftfinal.txt /var/www/html/frsasir/nftfinal.sh') ?>
	<?php  exec('sudo sh /var/www/html/frsasir/nftfinal.sh') ?>


	<script type="text/javascript">    
    
        function ejecutarnft(){
				<?php //exec('cp /var/www/html/frsasir/proximonft.txt /etc/nftables.conf')?>
                window.location.replace("firewall.php");
            }
			ejecutarnft();
			

	</script>



</head>
<body>
	<form>
		<input type="button" onclick="ejecutarnft();" value="Ejecutar">
	</form>
</body>
</html>
