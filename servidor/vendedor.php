<?php
    /*
        Esta página es exclusiva de un alumno que se haya autentificado por medio del login. Un acceso directo a ésta deberá de ser rechazado. Aquí aparecen las sesiones en escena para cuidar este 'detalle'.
    */

    session_start();
    if(isset($_SESSION["idvendedor"])){
        //La sesion está disponible, significa que es un alumno válido, entonces hay que permitir el acceso y personalizar la infomación que se despliegue.
        //Regularmente separo las funcionalidades en archivos y aquellos que vean con el sufijo '_BD' significa que realiza operaciones de solo consulta a la BD y cuyos resultados se utilizarán en el archivo actual; también observen que tiene el nombre del archivo base (alumno.php), esto con la intención de identificar rapidamente aquel conjunto de archivos que están relacionados; así pues sera común que, de ser necesario, encuentren archivos que se llamen 'alumno.js', 'alumno.css', 'alumno_AX.php', por ejemplo, el último contienen todo el código que el servidor realizará ante una llamada AJAX hecha por 'alumno.php' por medio del archivo 'alumno.js' concretamente en la función '$.ajax({})'
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
</head>
<body>

<h5>Hola, has iniciado sesion , vendedor</h5>
<a href="./cerrarSesion.php?nombreSesion=idvendedor">Cerrar Sesion</a>

                
</body>
</html>
<?php
    }else{
        //NO se detectó la sesion que hubo de generarse después de pasar por el login, entonces es un intento de acceso no autorizado, lo redireccionamos a la pantalla correspondiente
        header("location:./../index.php");
    }
?>