<?php
$numeros= ["2","4","6","8","10","12","14","16","18","20"];
echo "Ejercicio 1";
echo "<br>";
print "<pre>";
print_r($numeros);


$gente=["Pedro", "Ana", "34", "1"];
echo "<br>";
echo "Ejercicio 2";
echo "<br>";
print "<pre>\n";
print_r ($gente);
echo "<br>";

$datos=[
'Nombre' => "Pedro",
'Apellido' => "Torres",
'Direccion' => "Av Mayor 3703",
'Telefono' => 1122334455,
];
echo "<br>";
echo "Ejercicio 3";
echo "<br>";
print "<pre>\n";
print_r ($datos);

$ciudades= ["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];
echo "<br>";
echo "Ejercicio 4";

foreach($ciudades as $i => $j){
print "<pre>\n";
print ("La ciudad con el indice $i, tiene el nombre:$j");
print "<pre>\n";
}

$ciudades2 =['MD' => "Madrid",'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "Nueva York", 'LA' => "Los Angeles", 'CCG' => "Chicago"];
echo "<br>";
echo "Ejercicio 5";

foreach($ciudades2 as $i => $j){
print "<pre>\n";
print ("La ciudad con el nombre $j, tiene el indice:$i");
}
