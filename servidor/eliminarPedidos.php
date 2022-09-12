<?php

          include('./conexion.php');

          if(isset($_POST['pedido'])){

            $pedidoOut=$_POST['pedido'];

            $query="DELETE FROM pedido WHERE Numero_Pedido='$pedidoOut'";
            $result=mysqli_query($conexion,$query);

            if(!$result){
                die('Query failed'.mysqli_error($conexion));
            }
            echo 'se borro bien';
          }