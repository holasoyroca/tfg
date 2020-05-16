/etc/bind/named.conf.local


<?php 
				$fp = fopen("anteriordns.txt", "r");
				while (!feof($fp)){
					$linea = fgets($fp);
					echo $linea;
					echo "<br>";
				}
				fclose($fp);
			?>





$registro2 = 1;
    $registro2 = exec('cat /var/cache/bind/db.frsasir.net |grep -n $borrareg|cut -d":" -f1;');
    echo ("numero:");
	echo ("$registro2");
    
    exec("sed '".$registro."d' /var/cache/bind/db.frsasir.net");
    echo ("<br>");echo ("<br>");echo ("<br>");echo ("<br>");echo ("<br>"); 




    
    //grep -v "cadena de texto" archivo.txt > temp &amp;&amp; mv temp archivo.txt

    //sed '/cadena de texto/d' ./archivo.txt;
    
    $registro2 = 1;
    $registro2 = exec('cat /var/cache/bind/db.frsasir.net |grep -n $borrareg|cut -d":" -f1;');
    echo ("numero:");
	echo ("$registro2");
    echo ("<br>");
    echo ("<br>");
    $borrarfin = "sed -i '/".$borrareg."'/d /var/cache/bind/db.frsasir.net";
    echo $borrarfin;
    exec($borrarfin);
    echo ("<br>");echo ("<br>");echo ("<br>");echo ("<br>");echo ("<br>"); 








    //Nombre del archivo
        $archivo = "/var/cache/bind/db.frsasir.net";
    //Se abre el archivo
        $file = fopen($archivo, "r") or exit("Unable to open file!"); 
    //Auxiliar para las lineas del archivo
        $i = 0;
    //Palabra a buscar
        $palabraBuscar = $palabra;
    //Se lee el archivo
        while(!feof($file))
        { 
            /*Comparación del archivo y la palabra a buscar si es verdad 
            se almacena en la variable $linea*/
                if($borrareg == fgets($file)){
                    $linea = $i;
                }
                $i++;
                
            }
    //Se cierra el archivo
        fclose($file);
    //Se imprime el resultado
        echo "La línea en que se encuentra la palabra ".$palabraBuscar." es: ".$linea;
        echo "<br>";
        echo $i;
        
    











   






<?php
//Nombre del archivo
$archivo = "tuArchivo.txt";
//Se abre el archivo
$file = fopen($archivo, "r") or exit("Unable to open file!"); 
//Auxiliar para las lineas del archivo
$i = 0;
//Palabra a buscar
$palabraBuscar = "Gerona";
//Se lee el archivo
while(!feof($file))
{ 
    /*Comparación del archivo y la palabra a buscar si es verdad 
    se almacena en la variable $linea*/
    if($palabraBuscar == fgets($file)){
        $linea = $i;
    }
    i++;
}
//Se cierra el archivo
fclose($file);
//Se imprime el resultado
echo "La línea en que se encuentra la palabra ".$palabraBuscar." es: ".$linea;
?>

<?php
//abro el archivo para lectura
    $archivo = fopen ("/var/cache/bind/db.frsasir.net", "r");

    //inicializo una variable para llevar la cuenta de las líneas y los caracteres
    $num_lineas = 0;
    $caracteres = 0;

    //Hago un bucle para recorrer el archivo línea a línea hasta el final del archivo
    while (!feof ($archivo)) {
        //si extraigo una línea del archivo y no es false
        if ($linea = fgets($archivo)){
        //acumulo una en la variable número de líneas
        $num_lineas++;
        //acumulo el número de caracteres de esta línea
        $caracteres += strlen($linea);
        }
    }
    fclose ($archivo);
    echo "Líneas: " . $num_lineas;
    echo "Caracteres: " . $caracteres;
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //Nombre del archivo
    $archivo = "/var/cache/bind/db.frsasir.net";
    //Se abre el archivo
    $file = fopen($archivo, "r") or exit("Unable to open file!"); 
    //Auxiliar para las lineas del archivo
    $i = 0;
    //Palabra a buscar
    $palabraBuscar = "prueba1 IN A 192.168.1.156";
    //Se lee el archivo
    while(!feof($file))
    { 
        /*Comparación del archivo y la palabra a buscar si es verdad 
        se almacena en la variable $linea*/
            if($palabraBuscar == fgets($file)){
                $linea = $i;
            }
            $i++;
            
        }
        //Se cierra el archivo
        fclose($file);
        //Se imprime el resultado
        echo "La línea en que se encuentra la palabra ".$palabraBuscar." es: ".$linea;
        

        
        




           
    // Leer el contenido del archivo en un array:
    $array = file('/var/cache/bind/db.frsasir.net', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    /*
    Array
    (
      [0] => 189-Pamplona
      [1] => 345-Gerona
      [2] => 677-Madrid
    )
    */
    
    // Valor a buscar:
    $search = 'satan';
    
    // Obtener todas las líneas que tengan alguna coincidencia:
    $matches = array_filter($array, function($var) use ($search) { 
                 return preg_match("/^.*$search.*\$/m", $var); 
               });
    
    // Si se encontró algo, mostrarlo:
    if (count($matches) > 0) {
      foreach ($matches as $line) {
        print $line;
      }
    }
        
        
        
        ?>