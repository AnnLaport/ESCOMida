<?php

session_start();
 if(isset($_SESSION["idvendedor"]))
 {

   include 'conexion.php';

   $ID = $_SESSION["idvendedor"];

   $nombre =  $_POST["Nombre"]."_".$_POST["Paterno"]."_".$_POST["Materno"];

   $descripcion = $_POST["Descripcion"];

   $consulta = "UPDATE vendedor
              SET Nombre = '$nombre', Descripcion = '$descripcion'
              WHERE ID = $ID"; 

   $datos = mysqli_query($conexion,$consulta);

   header("location:perfilVendedor.php");

     
 }else
  {
     header("location:./../index.php");
  }
    


?>
