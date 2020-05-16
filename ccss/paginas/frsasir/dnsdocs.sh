#! /bin/bash

nameserver=`cat /var/cache/bind/db.frsasir.net |grep ORIGIN|cut -d" " -f2`
nversion=`cat /var/cache/bind/db.frsasir.net |grep version|cut -d";" -f1`
timerefresc=`cat /var/cache/bind/db.frsasir.net |grep refresco|cut -d";" -f1`
timereintentos=`cat /var/cache/bind/db.frsasir.net |grep reintentos|cut -d";" -f1`
timeexpira=`cat /var/cache/bind/db.frsasir.net |grep expira|cut -d";" -f1`
timemin=`cat /var/cache/bind/db.frsasir.net |grep minimo|cut -d";" -f1`
primerreg=`cat /var/cache/bind/db.frsasir.net |grep -n Registros:|cut -d":" -f1`
finaldoc=`cat /var/cache/bind/db.frsasir.net| wc -l`
totalreg=`awk 'NR>=16&&NR<=100' /var/cache/bind/db.frsasir.net`
named=`cat /etc/bind/named.conf.local`


echo " " > anteriordns.txt
echo "<u>IP SERVIDOR</u>:  $nameserver <br>" >>anteriordns.txt
echo "<u>NOMBRE DEL SERVIDOR:</u>  $nameserver <br>" >>anteriordns.txt
echo "<u>NUMERO DE VERSION</u>: $nversion <br>" >>anteriordns.txt
echo "<u>TIEMPO DE REFRESCO</u>: $timerefresc <br>" >>anteriordns.txt
echo "<u>TIEMPO DE REINTENTOS</u>: $nversion <br>" >>anteriordns.txt
echo "<br>" >> anteriordns.txt
echo "<u>ZONAS</u>:  <br> $named <br>" >>anteriordns.txt
exit
