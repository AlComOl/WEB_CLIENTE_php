<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>







<table border='1'>

<?php
   /* for($i=0;$i<$filas;$i++){
        echo '<tr>';
       
        for($j=0;$j<$columnas;$j++){
            echo '<td>3</td>';
        }
     
    }*/


    $continentes = array(
        array("continente"=>"Europa", "paises"=>array(array("pais"=>"España", "capital"=>"Madrid", "bandera"=>"img/espana.png"), array("pais"=>"Reino Unido", "capital"=>"Londres", "bandera"=>"img/reinounido.png"), array("pais"=>"Suecia", "capital"=>"Estocolmo", "bandera"=>"img/suecia.png"))),
        array("continente"=>"América", "paises"=>array(array("pais"=>"Perú", "capital"=>"Lima", "bandera"=>"img/peru.png"), array("pais"=>"Canadá", "capital"=>"Ottawa", "bandera"=>"img/canada.png"))),
        array("continente"=>"África", "paises"=>array(array("pais"=>"Chad", "capital"=>"Yamena", "bandera"=>"img/chad.png"), array("pais"=>"Uganda", "capital"=>"Kampala", "bandera"=>"img/uganda.png"))),
        array("continente"=>"Asia", "paises"=>array(array("pais"=>"China", "capital"=>"Pekín", "bandera"=>"img/china.png"), array("pais"=>"Japón", "capital"=>"Tokio", "bandera"=>"img/japon.png"))),
        array("continente"=>"Oceanía", "paises"=>array(array("pais"=>"Australia", "capital"=>"Canberra", "bandera"=>"img/australia.png")))
        );
    



    foreach ($continentes as $continente) {
        echo '<th colspan="3">';
        echo $continente["continente"];
        echo '</th>';
        foreach($continente["paises"] as $pais){
            echo "<tr>";
            echo '<td>'.$pais["pais"].'</td>';
            echo '<td>'.$pais["capital"].'</td>';
            echo '<td><img src="'.$pais["bandera"].'" width="50" height="30"></td>';
            echo '</tr>';
            
        }
      
    }
?>

</table>
</body>
</html>

