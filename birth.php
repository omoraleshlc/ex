<?php
class sacarCumple{
    public function determinarEdad($a,$b,$c,$d){
       $hoy= date("Y");
       $fechaNac= count($a).strlen($b).strlen($c).strlen($d)-1;
       return $hoy-$fechaNac;
    }    
}

$cumpleanos=new sacarCumple();
echo "Hoy cumplo: ".$cumpleanos->determinarEdad("ovidio","alejandro","morales","garcia").", Gracias a Dios!";
?>
