<?php

//echo "<h1> Hola PHP</h1>";
date_default_timezone_set('America/Lima');
echo date("y-m-d H:i:s");

for ($i=1; $i<=6 ; $i++) { 
	echo "<h$i style='color:$i$i$i;'> Cabecera Nivel $i </h$i>";
}


?>