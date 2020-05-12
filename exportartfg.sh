#! /bin/bash
rm -rf ccss
mkdir ccss
cp -r /etc/apache2/ ccss/apache/
cp -r /etc/netplan/ ccss/netplan/
cp -r /var/log/apache2/ ccss/log/
cp -r /var/www/html/ ccss/paginas/
cp -r /var/cache/bind/ ccss/dns/
cp -r /etc/bind/named.conf.local ccss/dns/



chmod -R 777 ccss
chown -R froca ccss
chgrp -R froca ccss

echo 'Todo guardado en la carpeta "ccss" correctamente.'

# UpToGit 0.2
# Actualiza facilmente tu repositorio Git
# (CC) 2020 Fernando Roca 
# http://frsasir.blogspot.com
# Bajo licencia GNU/GPL

# Modo de uso: copia o mueve este script a /home/gits y desde el directorio donde se encuentre la copia de un repo git, ejecútalo de esta manera:
# sudo sh exportartfg.sh

# Comprobamos si el directorio en el que estamos es de un repositorio git
#if [ ! -d '.git' ]; then
#	echo 'Esta carpeta no contiene un repositorio Git'
#	exit -1
#fi

# Ahora comprobamos si se le paso algun parametro
#if [ $# == 0 ]; then
#	echo "UpToGit: ¡Error! No se le a pasado ningún parámetro"
#	echo "uptogit fichero1 fichero2 ... ficheroN"
#	exit -1
#else
#	# Recorremos los parametros para comprobar si son ficheros o directorios
#	for file in $*; do
#		if [ ! -e $file ]; then
#			echo "UpToGit: El archivo o directorio $file no existe"
#			exit -1
#		fi
#	done

	# Si llegamos hasta aquí, indicamos a Git los archivos a subir
	git add .

	# Esto nos pedira el mensaje del commit
	echo "Introduce el mensaje del commit:"
	read TXT
	git commit -m "$TXT"

	# Y terminamos subiendo los archivos
	git push -u origin master

#fi
	echo "Actualizado correctisimamente"
