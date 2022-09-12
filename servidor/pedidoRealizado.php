<?php

     include('./conexion.php');
     
     $jsonPedido=[];

    
       //Este archivo recupera la información que llega a la página por medio de un formulario y genera de manera automática una variable PHP con base en el valor del atributo 'name' de cada componente del formulario.
     include("./getPosts.php");

     $estado=0;

     $sql = "INSERT INTO pedido(Descripcion,Hora_Pedido,Salon,Estado_Pedido,ID,ID_CLIENTE)VALUES('$descripcion','$hora','$salon','$estado','$vendedor','$cliente')";
     $res = mysqli_query($conexion, $sql);

     if(!$res){
        $jsonPedido["val"] = 0;
        $jsonPedido["msj"] = "<h5>Tu pedido no se realizó, llena los campos apropiadamente</h5>";
        echo json_encode($jsonPedido);
         die(0);
     }

       $jsonPedido["val"] = 1;
        $jsonPedido["msj"] = "<h5>Tu pedido se realizó correctamente</h5>";
        echo json_encode($jsonPedido);

?>