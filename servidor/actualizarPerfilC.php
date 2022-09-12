<?php

session_start();
 if(isset($_SESSION["idcliente"]))
 {

   include 'conexion.php';

   $ID = $_SESSION["idcliente"];

   $nombre =  $_POST["Nombre"];

   $consulta = "UPDATE cliente
              SET Nombre = '$nombre'
              WHERE ID_CLIENTE = $ID"; 

   $datos = mysqli_query($conexion,$consulta);

   header("location:perfilCliente.php");

     
 }else
  {
     header("location:./../index.php");
  }
    


?>
