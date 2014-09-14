<?php 


$edad = 30;
$nombre = "yukari";
$arreglo[0] = "dormir";
$arreglo[1] = "comer";
$arreglo[2]	= "viajar";
$arreglo[3]	= "video juegos";


function ajedrez()
{
static $res;
static $granos=1;

$res=$granos*2;

for ($res=0; $res <=64 ; $res++) { 
	echo $res;
}



}
    
    

      ajedrez(); 

 

	
	
	

	




 ?>