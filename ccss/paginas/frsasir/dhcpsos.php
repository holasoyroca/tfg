<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>MaestreFestival</title>
	
	<script type="text/javascript">    
    
        function dhcpsos(){
                window.location.replace("dhcpd.php");
                <?php exec('cp /var/www/html/frsasir/dhcpsos.txt /var/www/html/frsasir/proximo.txt');?>
				<?php exec('cp /var/www/html/frsasir/proximo.txt /etc/dhcp/dhcpd.conf');?>
				<?php exec('service isc-dhcp-server restart');?>

            }
            dhcpsos();
    </script>
