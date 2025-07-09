<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$x1="";
$x2="";

$determinante= $b * $b -4 *$a * $c;

if ($a == 0 || $determinante < 0){
    print "La ecuación no tiene solución.";
} else{
    $raiz= sqrt($determinante);
    $x1= ($b + $raiz)/(2* $a);
    $x2= ($b - $raiz)/(2* $a);

    print "Los números ingresados son: <br>";
    print "A:" .$a. "<br>";
    print "B:" .$b. "<br>";
    print "C:" .$c. "<br>";
    print "Las respuestas son:";
    print "X1=" .$x1. "<br>";
    print "X2=" .$x2;
}

?>