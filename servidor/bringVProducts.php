<?php

          include('./conexion.php');

          if(isset($_GET['idvendedor'])){
               
            $idvendedor=$_GET['idvendedor'];  
            $query="SELECT * from pedido WHERE ID='$idvendedor'";
            $result=mysqli_query($conexion,$query);
     
            if(!$result){
                     die('Query failed'.mysqli_error($conexion));
            }
     
            $jsonissues=array();
            while($row=mysqli_fetch_array($result)){
                 $jsonissues[]=array(
                     'idpedido'=>$row['Numero_Pedido'],
                     'vdescripcion'=>$row['Descripcion'],
                     'vhorapedido'=>$row['Hora_Pedido'],
                     'vsalon'=>$row['Salon'],
                     
            );
            }
           $jasonstring=json_encode($jsonissues);
            echo $jasonstring; 
     
          }

?>