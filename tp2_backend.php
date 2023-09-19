<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ejercicios</h1>

<?php
$n=5;
if ($n>0) {
echo "Ejercicio 1";
echo "<br>";
echo "n es un numero positivo";
echo "<br>";
echo "<br>";
}

if ($n>1 && $n<10) {
echo "Ejercicio 2";
echo "<br>";
echo "n es mayor que 1 y menor a 10";
echo "<br>";
echo "<br>";
}

$n=11 ;
echo "Ejercicio 3";
echo "<br>";
if ($n>10 || $n<2) {
  echo " n cumple la condicion";
  echo "<br>";
}


$numero1=9 ;
$numero2=4 ;
if ($numero1>$numero2) {
  echo "<br>";
echo "Ejercicio 4";
echo "<br>" ;
echo $numero1+$numero2 ;
echo "<br>" ;
echo $numero1-$numero2 ;
echo "<br>" ;
echo "<br>" ;
} elseif ($numero1<$numero2) {
  echo "<br>" ;
  echo $numero1*$numero2 ;
  echo "<br>" ;

} else  {
  echo "los numeros ingresados son iguales" ;
}

$numero1=12 ;
$numero2=16 ;
if ($numero1>$numero2) {
echo "<br>" ;
echo $numero1+$numero2 ;
echo "<br>";
echo $numero1-$numero2 ;
} elseif ($numero1<$numero2) {
  echo $numero1*$numero2 ;
  echo "<br>" ;
  echo $numero1/$numero2 ;
  echo "<br>" ;
  echo $numero1%$numero2 ;
} else  {
  echo "los numeros ingresados son iguales" ;
echo "<br>";
}

$numero1=9 ;
$numero2=9 ;
if ($numero1>$numero2) {
echo "<br>" ;
echo $numero1+$numero2 ;
echo "<br>";
echo $numero1-$numero2 ;
} elseif ($numero1<$numero2) {
  echo $numero1*$numero2 ;
  echo "<br>" ;
  echo $numero1/$numero2 ;
} else  {
  echo "<br>" ;
  echo "<br>" ;
  echo "los numeros ingresados son iguales" ;
echo "<br>";
}


 ?>

  </body>
</html>
