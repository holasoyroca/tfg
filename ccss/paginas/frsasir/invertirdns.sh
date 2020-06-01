#! /bin/bash
#	var i = 0;

#contar registros
nregistros=$(wc /var/cache/bind/db.frsasir.net |cut -d" " -f2);
#echo "$nregistros";



#Vamos a Escribir el documento temporal
echo "\$ORIGIN 1.168.192.in-addr.arpa. " > dnsinverso.txt
echo " " >> dnsinverso.txt
echo "\$TTL 86400 ; 1 dia " >> dnsinverso.txt
echo " " >> dnsinverso.txt
echo "@   IN   SOA   master.frsasir.net. administrador.master.frsasir.net.(">> dnsinverso.txt
echo " ">> dnsinverso.txt
echo "    1            ;numero version">> dnsinverso.txt;
echo "    6H           ;tiempo de refresco">> dnsinverso.txt;
echo "    1H           ;tiempo de reinitentos">> dnsinverso.txt;
echo "    2W           ;expira">> dnsinverso.txt;
echo "    10800        ;minimo (3horas)">> dnsinverso.txt;
echo " )">> dnsinverso.txt
echo " ">> dnsinverso.txt
echo " ;servidor       internet        NameServer">> dnsinverso.txt;
echo " ">> dnsinverso.txt
echo "  IN NS master.frsasir.net.">> dnsinverso.txt;
echo " 1 IN PTR frsasir.net.">> dnsinverso.txt;





#mostrar registros
for i in `seq 17 $nregistros`
do
	linea=$(head -$i /var/cache/bind/db.frsasir.net | tail -1);
	nombre=$(echo "$linea"|cut -d" " -f1 );
	ip=$(echo "$linea"|cut -d" " -f4 );
	ip1=$(echo "$ip"|cut -d"." -f1 );
	ip2=$(echo "$ip"|cut -d"." -f2 );
	ip3=$(echo "$ip"|cut -d"." -f3 );
	ip4=$(echo "$ip"|cut -d"." -f4 );

	#echo "$linea"
#	echo "$nombre";
#	echo "$ip";
#	echo "$ip4.$ip3.$ip2.$ip1";
	echo "$ip4 IN PTR $nombre" >> dnsinverso.txt;
done
 


#Sustituir temporal por original
cp dnsinverso.txt /var/cache/bind/db.192.168.1

#cajonSastre
	#head -$i /var/cache/bind/db.frsasir.net | tail -1




