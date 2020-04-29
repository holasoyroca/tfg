#! /bin/bash
ipserver=`cat /etc/dhcp/dhcpd.conf| grep server-identifier|cut -d" " -f2`
maskserver=`cat /etc/dhcp/dhcpd.conf| grep subnet-mask|cut -d" " -f3`
gateway=`cat /etc/dhcp/dhcpd.conf| grep routers|cut -d" " -f3`

final=`cat /etc/dhcp/dhcpd.conf| wc -l`
#ultimas=$final - 26;
#subnet=`cat /etc/dhcp/dhcpd.conf|tail -$ultimas`

echo " " > anteriormente.txt
echo "<u>IP servidor:</u>  $ipserver <br>" >>anteriormente.txt
echo "<u>Mascara:</u>      $maskserver <br>" >>anteriormente.txt
echo "<u>Gateway:</u>      $gateway <br>" >>anteriormente.txt

subnet=`cat /etc/dhcp/dhcpd.conf|tail -n +11 | head -n 150`

echo "<u>Subredes:</u> <br>" >>anteriormente.txt
echo "" >> anteriormente.txt
echo " $subnet" >> anteriormente.txt
