<?php

   //Exercici 1: Definir i mostrar per pantalla 4 variables. 
echo "<b>Ejercicio 1 </b>";
echo "<br>";
$a = 2023;
$b = 6.7;
$c = "July";
$d = true;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
echo "<br>";

  //Crea una constant que contingui el teu nom i l'imprimeixi per pantalla amb format de títol.
define ('name', "Patri");
echo "<title>".name."</title>" ;
echo "<br>";
echo "<br>";  

//Exercici 2: 
//Imprimeix per pantalla "Hello, World!" utilitzant una variable
echo "<b>Ejercicio 2 </b>";
echo "<br>";
$ex = "Hello, World!";
echo $ex;
echo "<br>";
echo "<br>";
//Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
echo strtoupper($ex);
echo "<br>";
echo "<br>";
//Imprimeix per pantalla la mida (longitud) de la variable.
echo strlen($ex);
echo "<br>";
echo "<br>";
//Imprimeix per pantalla l'string en ordre invers de caràcters.
echo strrev($ex);
echo "<br>";
echo "<br>";
//Crea una nova variable amb el contingut "Aquest és el curs de PHP" 
//i imprimeix per pantalla la concatenació de tots dos strings.
$ex_two = "Aquest és el curs de PHP";
echo $ex.$ex_two;
echo "<br>";
echo "<br>";

//Exercici 3: Declara dues variables X i Y de tipus int, dues variables N i M de tipus double 
//i assigna a cadascuna un valor. 
echo "<b>Ejercicio 3a</b>";
$X=2;
$Y=6;

$N=4.5;
$M=7.3;
echo "<br>";
//A continuació, mostra per pantalla:
//-El valor de cada variable.
echo "El valor de X es ".$X;
echo "<br>";
echo "El valor de Y es ".$Y;
echo "<br>";
echo "El valor de N es ".$N;
echo "<br>";
echo "El valor de M es ".$M;
echo "<br>";
echo "<br>";

//-La suma.

echo "X+Y= ".$X+$Y;
echo "<br>";
echo "N+M= ".$N+$M;
echo "<br>";
echo "<br>";

//-La resta.

echo "X-Y= ".$X-$Y;
echo "<br>";
echo "N-M= ".$N-$M;
echo "<br>";
echo "<br>";

//-El producte
echo "X*Y= ".$X*$Y;
echo "<br>";
echo "N*M= ".$N*$M;
echo "<br>";
echo "<br>";

//-El mòdul.
echo "X%Y= ".$X%$Y;
echo "<br>";
echo "N%M= ".$N%$M;
echo "<br>";
echo "<br>";

//El doble de cada variable.
define ("doble", 2);
echo "El doble de X es ".doble*$X;
echo "<br>";
echo "El doble de Y es ".doble*$Y;
echo "<br>";
echo "El doble de N es ".doble*$N;
echo "<br>";
echo "El doble de M es ".doble*$M;
echo "<br>";
echo "<br>";

//La suma de totes les variables.
//echo "La suma de totes les variables es ".$X+$Y+$N+$M;
$numbers=array($X,$Y,$N,$M);
echo "La suma de totes les variables es ".array_sum($numbers);
echo "<br>";
echo "<br>";

//El producte de totes les variables.
//echo "El producte de totes les variables es ".$X*$Y*$N*$M;
echo "El producte de totes les variables es ".array_product($numbers);
echo "<br>";
echo "<br>";

// Crea una funció Calculadora que entri dos nombres per paràmetre,
// i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.
echo "<b>Ejercicio 3b </b>";
echo "<br>";
$n1=$_POST['Number1'];
echo "El primer numero elegido es ".$n1;
echo "<br>";
$n2=$_POST['Number2'];
echo "El segundo numero elegido es ".$n2;
echo "<br>";
$oper=$_POST['operacion'];
function calculator($n1,$n2,$oper){

switch ($oper){
    case "suma":
        $total=$n1+$n2;
        break;
    case "resta":
       $total=$n1-$n2;
        break;
    case "multiplicacion":
        $total=$n1*$n2;
        break;
    case "division":
        $total=$n1/$n2;
        break;
    default:
    echo "La operacion seleccionada no es valida";
}
 return $total;
}
echo "El resultat es ".calculator($n1,$n2,$oper);
echo "<br>";
echo "<br>";

//Ejercicio 4:
echo "<b>Ejercicio 4 </b>";
echo "<br>";
$limite=$_POST['limite'];
$secuencia=$_POST['secuencia'];
function contador($limite,$secuencia){
    define ("predeterminat", 10);

   if ($limite==0){
        for ($con=0;$con<=predeterminat;$con+=$secuencia){
           echo  $con.",";
        }
    }else{
        for ($con=0;$con<=$limite;$con+=$secuencia){
            echo $con.",";
        }
    }
    echo "<br>";
    echo "Has elegido que cuente de ".$secuencia." en ".$secuencia;
}
contador($limite,$secuencia);
echo "<br>";
echo "<br>";

//Ejercicio 5:
echo "<b>Ejercicio 5</b>";
echo "<br>";
$nota=$_POST['nota'];
function grau($nota){
    
    if ($nota>="6"){
        echo "Enorabuena, estas en PRIMERA DIVISION!!!! ";
    }elseif ("5.9">=$nota && $nota>="4.5" ){
        echo "Buen trabajo, estas en SEGUNDA DIVISION!!!! ";
    }elseif ("4.4">=$nota && $nota>="3.3"){
        echo "Sigue esforzandote, estas en TERCERA DIVISION!!!! ";
    }else{
        echo "Tendras que reprobar, lo lamento.";
    }
}
grau($nota);
echo "<br>";
echo "<br>";

//Ejercicio 6:
echo "<b>Ejercicio 6</b>";
echo "<br>";

 function isBitten(){
    $bitten=rand(0,1);
        if($bitten==0){
        echo "True";
        }else{
        echo"False";
        }
 }
isBitten();
?>