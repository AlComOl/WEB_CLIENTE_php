
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<button style="background-color: red; padding:20px">BORAR</button>
   ''

<!-- // var_dump($imagenes); -->
<?php

$dir_subida = './';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

//basename: muestra el nombre del fichero con la extensión

echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

$imagenes=scandir("./");
$l=count($imagenes);

for ($i=0; $i < $l; $i++) { 
   

        echo '<img src="'.$imagenes[$i].'"style="height:50px weight:50px;">';
}

?>

    
</body>
</html>



