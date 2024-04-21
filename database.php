<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit; //impide que se ejecute más código, peligro de que se revele información sensible sin este paso
    } 

    return $db; //aquí retorna a una instancia de la connexión
}