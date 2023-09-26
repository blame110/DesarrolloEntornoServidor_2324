<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

define("MAXHP",3000);
//Diferencia entre concatenar y mostrar separado por ,
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

echo "This ". "string ". "was ". "made ". "with multiple parameters.";

//Tipos de datos primitivos en php
$nombre = "Pedro";
$edad = 24;
$pi= 3.14159874532;
$casado=true;
$ciudades =['sevilla','benalup casas viejas', 'soria'];

const fijo="fijo";



//Mostramos por pantalla tipo de dato y valor
var_dump($nombre)."<br/>";
var_dump($edad)."<br/>";
var_dump($pi)."<br/>";
var_dump($casado)."<br/>";
var_dump($ciudades)."<br/>";

//strlen nos muestra la longitud de un string
echo "Longitud posicion 2: " . strlen($ciudades[1])."<br/>";

//str_word_count nos dice cuantas palabras hay en un String
echo "Palabras en posicion 2: " . str_word_count($ciudades[1])."<br/>";

//Mostramos una constante por pantalla, la constante no lleva el $ antes
echo MAXHP;

//Numero aleatorio entre 10 y 35
echo rand(10.0,35.0)."<br/>";



?>
    
</body>
</html>