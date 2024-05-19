<?php include 'includes/header.php'; //include incluye otros archivos para no repetir código, reutilizarlo y hacer modificaciones de forma ágil

//include si no encuetra el archivo sigue ejecutándo el código
//require si no encuentra el archivo no se ejecuta
//require_once si el archivo ya fue incluído, lo ignora. Si no ha sido lo incluído, lo va a incluir
require 'funciones.php'; //separamos la funciones para mejorar la arquitectura del proyecto

iniciarApp();



include 'includes/footer.php';