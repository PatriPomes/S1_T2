<?php
define('minim',3);
define("increment", 5);
define("base",10);
define("eur",100);
$temps=1;
function costTrucada($temps){

 if($temps==minim){
   return base;
 }elseif ($temps>minim){
   return $cost=(($temps-minim)*increment)+base;
 }else{
  return $cost=$temps*base/minim;
 }

}
$euros=costTrucada($temps)/eur;

echo "La teva trucada ha tingut una durada de ".$temps." minuts, i un cost de ".round(costTrucada($temps),2)." centims (".round($euros,2).") Euros";

?>