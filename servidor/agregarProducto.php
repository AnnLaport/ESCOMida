<?php

   include 'conexion.php';


     session_start();

   if(isset($_SESSION["idvendedor"]))
   {

    $ID = $_SESSION["idvendedor"];

    $nombre = $_POST["nombre_producto"];

    $precio = $_POST["precio_producto"];

    $descripcion= $_POST["descripcion_producto"];

    $url= $_POST["imagen_producto"];

    $consulta= "INSERT INTO producto (Nombre_Producto,Precio,url,ID,descripcion)
               VALUES ($nombre,$precio,$url,$ID,$descripcion)";  

    $consulta= "INSERT INTO producto (Nombre_Producto,Precio,url,ID,descripcion) VALUES ('$nombre', $precio, '$url' ,$ID,'$descripcion')"; 

    $datos = mysqli_query($conexion,$consulta);

    echo $datos; 

    header("Location: listaProductos.php");
    exit;
   
   }else
   {
     header("location:./../index.php");
   }   


?>














