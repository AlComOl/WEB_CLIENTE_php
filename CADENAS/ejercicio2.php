<?php
$frase="hola me llamos Alvaro";
$res="";
for ($i=0; $i< strlen($frase); $i++) {
    
    if($i%2==0){
        //$res[$i]=$frase.str_replace($frase[$i],$frase.strtolower($frase[$i]),$frase);
        $res.=strtoupper($frase[$i]);
    } else{
        //$res.$frase.str_replace($frase[$i],$frase.strtoupper($frase[$i]),$frase);
        $res.=strtolower($frase[$i]);
    }
}
echo $res;



/*$cadena = "El caballero oscuro";
$tam = strlen($cadena);
echo "La longitud de '$cadena' es: $tam <br />";

$oscuro = substr($cadena, 13); // desde 13 al final
$caba = substr($cadena, 3, 4); // desde 3, 4 letras
$katman = str_replace("c", "k", $cadena);
echo "$oscuro $caba ahora es $katman";

echo "Grande ".strtoupper($cadena);
//print_r($res);*/

?>