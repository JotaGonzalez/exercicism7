<?php
// creo un array amb 3 elements
$a = array( 5,7,11);
print_r( $a );
echo "<br>";

//afegeixo més elements a l'array
$a[] = 13;  
$a[] = 17;
print_r( $a );
echo "<br>";

//encara un altre
array_push ($a, 23);
print_r( $a );
echo "<br>";

//pinto elements de l'array
echo "El valor de del tercer element de l'array és " . $a[2];
echo "<br>";

unset($a[0]); 
unset($a[1]); // el valor 7 seguia a la possició 1
print_r( $a );
echo "<br>";


echo "1.- Quina és la instrucció a PHP per a crear un array?";
echo "L'instrucció per crear l'array és, per exemple: $a = array(1,2,3) ";
echo "<br>";

echo "2.- Es pot crear un array buit a PHP ó sempre s'hi han de posar valors a la creació?";
echo "Es poden crear arrays buits amb la instrucció: $empty = array() ";
echo "<br>";

echo "3.- Si li prenem el tipus a l'array amb la funció gettype(), quin tipus obtenim?";
echo "Retorna 'array'.";
echo "<br>";

echo "4.- Com puc fer per afegir un element a l'array a partir de la darrera posició coneguda? Esmenta dues maneres diferents.";
echo "El primer metode pot ser: array_push( 'nomdearray','dades').";
echo "El segon metode pot ser: $array[] = 'dades'."; 
echo "<br>";

echo "5.- Com s'accedeix a un element d'un array?";
echo "Seria el següent: $array['key_de_la_dada_en_concret'];";
echo "<br>";

echo "6.- Com s'esborra un element d'un array?";
echo "Per esborrar..: unset($array['key'])";
echo "<br>";

echo "7.- Fixat que el valor 7, emmagatzemat a la posició $a[1], segueix exactament a la mateixa posició després d'esborrar $a[0]. Això no seria així en altres llenguatges de programació, però a PHP els arrays, realment, són mapes ordenats. Farem el següent exercici per comprendre aquest concepte. ";
echo "Les arrays actuen com arrays associatives, es a dir, com un diccionari. Tenen una key i un valor associat a aquesta key. Si desapareix el valor anterior, el valor actual no es veu afectat. Això no passa en arrays en altres llenguatjes (que no siguin associatives) ja que mantenen un orde lógic (1,2,3,4...) i si es borra una posició els valors es recoloquen en ordre.";
echo "<br>";
?>