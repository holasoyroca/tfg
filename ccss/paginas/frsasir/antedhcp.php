<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>FRSASIR</title>
	
	<script type="text/javascript">    
    
        function historial(){
		anterior = "<?php exec('cat /var/www/html/frsasir/anteriormente.txt')?>";
			echo $antedhcp;            
			window.location.replace("dhcpd.php");}
		
            historial();
   	 </script>
