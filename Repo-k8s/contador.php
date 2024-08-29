<?php

$handle = fopen("contador.txt", "r");
if(!$handle) {
    echo "El archivo no existe.";
} else {
    $counter =(int )fread($handle,20);
        fclose($handle);
        $counter++;
        echo"Bienvenido, cantidad de visitas: ". $counter . "" ;
    $handle = fopen("contador.txt", "w" );

    fwrite($handle,$counter);
    fclose ($handle);
}
?>
