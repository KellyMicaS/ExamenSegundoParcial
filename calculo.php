<?php
//Declaración de variables e ingreso de información del formulario
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$x1="";
$x2="";

//Calculo del discriminante para la ecuación
$determinante= $b * $b -4 *$a * $c;

//Se usa if con una doble condición para determinar si la operación es válida o no
if ($a == 0 || $determinante < 0){
    print "La ecuación no tiene solución.";
} else{
    //Usamos un sqrt para sacar la raiz cuadrada de la ecuación
    $raiz= sqrt($determinante);
    $x1= ($b + $raiz)/(2* $a);
    $x2= ($b - $raiz)/(2* $a);
    
    //Usamos el print para imprimir los resultados del cálculo
    print "Los números ingresados son: <br>";
    print "A:" .$a. "<br>";
    print "B:" .$b. "<br>";
    print "C:" .$c. "<br>";
    print "Las respuestas son:";
    print "X1=" .$x1. "<br>";
    print "X2=" .$x2;
}

?>