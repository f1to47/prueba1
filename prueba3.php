<?php 


for ($i=0; $i <=30 ; $i++) { 
	


}



$moneda["mex"]="pes";
$moneda["usa"]="dollar";
$moneda["esp"]="euro";
$moneda["ing"]="lbr";


$gustos[0]="videojuegos";
$gustos[1]="coches";
$gustos[2]="futbol";




function micodigo($ar, $tt){


	foreach ($ar as $key => $value) {
	
		echo "<br> $tt ".$key." = ".$value;
	}

}

micodigo($gustos, "gustos"); 

micodigo($moneda, "moneda"); 


function tabla($ci){

	echo "<br><br> esta es la tabla del $ci <br>";

  for ($num=0; $num <=10 ; $num++) { 
  	
  	echo "<br> $ci x $num =".$ci*$num;
  }

}




tabla(345);
echo "<br>";
tabla(34);
echo "<br>";
tabla(67);
echo "<br>";





function ajedrez(){

 for ($box=0; $box <=64 ; $box++) { 

 	static $trigo=1;
 	
 	echo "<br>".$trigo+$trigo;
 }

}


ajedrez();

 ?>