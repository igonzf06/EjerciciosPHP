<?php
    //Comrobamos los errores de ejecucion
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    //Declaramos las variables
    $cantii = $_POST['cantidad'];
    $pesetae = $_POST['peseteuros'];
    $europes = $_POST['europeset'];
    //Condiciones
    if (isset($cantii) && isset($pesetae) && isset($europes)) {
        echo "No tiene sentido seleccionar ambas conversiones a la vez";
    }
    elseif (isset ($europes)) {
        echo "Has seleccionado la conversión de euros a pesetas </br>";
        $prod2 = (int) $cantii * 166.38;
        echo "La cantidad resultante es $prod2 pesetas";
    }
    elseif (isset($pesetae)) {
        echo "Has seleccionado la conversión de pesetas a euros. </br>";
        $prod1 = (float) $cantii / 166.38;
        //Redondeamos con la funcion round
        $redond = round($prod1, 2);
        echo "La cantidad resultante es $redond €";  
    }
    elseif (!$pesetae && !$europes){
        echo "Debes seleccionar un tipo de conversión";
    }
?>