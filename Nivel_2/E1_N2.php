<?php
define('minim',3);
define("increment", 5);
define("base",10);
define("eur",100);
$temps=100;
function costTrucada($temps){

 if($temps==minim){
   return base;
 }elseif ($temps>minim){
   return $cost=(($temps-minim)*increment)+base;
 }

}
$euros=costTrucada($temps)/eur;

echo "La teva trucada ha tingut un cost de ".costTrucada($temps)." centims (".$euros.") Euros";

?>
