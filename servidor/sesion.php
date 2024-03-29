<?php


session_start();

       include('./conexion.php');


    
    //Este archivo recupera la información que llega a la página por medio de un formulario y genera de manera automática una variable PHP con base en el valor del atributo 'name' de cada componente del formulario.
    include("./getPosts.php");

    //En este arreglo prepararemos la respuesta, en formato JSON, que dará el servidor a la petición AJAX. Aprovecharemos que un arreglo asociativo PHP es un 'primo' de JSON
    $respAX = [];

    
    $sql = "SELECT * FROM vendedor WHERE ID = '$idvendedor' AND contrasena = '$contrasena'";
    $res = mysqli_query($conexion, $sql);
    //Nuestro modelo, si está bien hecho, debe contener solo un registro con la combinación boleta-contrasena, en caso contrario habrá que reclamar al profesor de BD
    $inf = mysqli_num_rows($res);
    if($inf == 1){
        //Significa que solo un registro, en la BD, contiene los datos proporcionados a través del formulario: es un alumno válido; creamos una 'marca' de que pasamos por el login y nos autentificamos, entonces aquí el uso de una SESION
        $_SESSION["idvendedor"] = $idvendedor;
        $respAX["val"] = 1;
        $respAX["msj"] = "<h5>Bienvenido!!! :)</h5>";
    }else{
        //Cualquier otro caso no nos interesa, no son datos válidos
        $respAX["val"] = 0;
        $respAX["msj"] = "<h5>Datos incorrectos. Favor de intentarlo nuevamente.</h5>";
    }

    //El arreglo asociativo $respAX lo convertimos a formato JSON con la función json_encode() https://www.w3schools.com/php/func_json_encode.asp Todo lo que sucedió en la llamada al servidor esta resumida en este JSON: 'val' es un código de estatus de la operación solicitada y 'msj' es el texto que aparecerá al usuario indicando en 'cristiano' que sucedió con su petición. NO olviden que en el contexto de AJAX con PHP todo echo es considerado como una respuesta que el callaback 'success' de la función $.ajax() recibe.
    echo json_encode($respAX);
?>

