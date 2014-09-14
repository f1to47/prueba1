<style>



body{ background: #ccc}

.container{width: 100%; margin: 0 auto; position: relative; background: #ddd; padding: 20px; max-width: 1000px}

.poster{ max-width: 150px;}


.column1{ width: 20%; float: left; position:  relative;}
.column2{ width: 80%; float: left; position:  relative;}





h1, h2, p{ font-family: arial}

h1{ font-size: 30px}
h2{ font-size: 20px}
p{ font-size: 15px}








</style>

<?php 




$pelicula = array();
$pelicula["frozen"] = array('titulo' => 'frozen', 'year' => '2013', 'des' => 'Elsa, princess of Arendelle, possesses cryokinetic powers, with which she is able to produce ice, frost, and snow at will. One night while playing...', 'poster' => 'poster' );
$pelicula["amelie"] = array('titulo' => 'amelie', 'year' => '2001', 'des' => 'Amélie Poulain was raised by eccentric parents who — erroneously believing that she had a heart defect — prevented her from meeting other children. She was home schooled by her mother. She developed an active imagination and fantasy life to cope with her loneliness...', 'poster' => 'poster' );









$movie = $_POST["titulo"];/*----- le asigno a la variable $movie el valor ingresado por el usuario--------*/


?>



<body>

	<div class="container">

      <?php 

  /*error al no encontrar la variable $movie en los arreglos, probacr con isset/*/       
  
        if ($movie == $pelicula[$movie]['titulo']) { echo "<div class='column1'><img src='img/".$pelicula[$movie]['titulo']."-p.jpg' class='poster'></div><div class='column2'><h1>".$pelicula[$movie]['titulo']."</h1><h2>(".$pelicula[$movie]["year"].")</h2><p>".$pelicula[$movie]['des']."</p></div>"; }
        
         else{ echo "lo sentimos no tenemos esa pelicula disponible";}

      ?>

	</div>

</body>

 



