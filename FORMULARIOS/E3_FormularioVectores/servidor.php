<!-- Se desea realizar un formulario en el servidor que genere 10 inputs 
 y un botón, a continuación, el servidor recogerá todos
 los datos los mostrará y calculará la suma total.  -->


<?php

//si el formulario se ha enviado
if(isset($_POST["enviar"])){
   //creo un array con los numero enviados del formulario(obtener datos)
    $sumaNumeros=$_POST["n"];
   //suma los numeros del array con la función
    echo"<h1>resultado:".array_sum($sumaNumeros)."</h1>";

}

//creamos el formulario
echo "<form action=''method='post'>";
    //iteramos 10 veces por las casillas
    for ($i=0; $i <10 ; $i++) {
        echo"<label for='numeros'>número $i:</label>";//texto
        echo"<input type='text' name='n[]'><br>";//creamos el input
    
    }
    echo"<input type='submit' name='enviar'>";//boton
    echo"</form>";//cerramos formulario

    ?>
 <!-- <form action="servidor.php" method="POST">
    
//     numero1 :<input type="text" name="n"><br>
//     numero2 :<input type="text" name="n"><br>
//     numero3 :<input type="text" name="n"><br>
//     numero4 :<input type="text" name="n"><br>
//     numero5 :<input type="text" name="n"><br>
//     numero6 :<input type="text" name="n"><br>
//     numero7 :<input type="text" name="n"><br>
//     numero8 :<input type="text" name="n"><br>
//     numero9 :<input type="text" name="n"><br>
//     numero10 :<input type="text" name="n"><br>
//     <input type="submit">
// </form>









 




