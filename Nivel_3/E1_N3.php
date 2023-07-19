<?php

$limit=21;
function eratostenes($limit){

    for($contador=2;$contador<$limit;$contador++){
            $numeros[$contador]=true;
    }
    $numeros[2]=true;

    for ($p=2;$p<$limit;$p++){
        if ($numeros[$p]){
            for ($contador=$p*$p;$contador<$limit;$contador+=$p){
        $numeros[$contador] = false;
            }
        }
    }

echo "Los numeros primos desde cero hasta el numero indicado son: ";
for ($p = 2; $p < $limit; $p++){
  if ($numeros[$p]){
    echo $p." ";
  }
}
}

 eratostenes($limit);
?>