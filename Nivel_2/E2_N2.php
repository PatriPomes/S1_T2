<?php

define("Xocolata",1);
define("Xiclet",0.5);
define("Caramel",1.5);

$num_xoc=3;
$num_xic=2;
$num_car=4;


function preu_total($num_xoc,$num_xic,$num_car){
  return ($num_xoc*Xocolata)+($num_xic*Xiclet)+($num_car*Caramel);
}

echo "El preu total de la teva compra és ".preu_total($num_xoc,$num_xic,$num_car)." euros."

?>