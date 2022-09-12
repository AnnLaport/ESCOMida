<?php

       include('./conexion.php');

    
       $query="SELECT * from vendedor WHERE Estado='1' AND Aceptado='1'";
       $result=mysqli_query($conexion,$query);

       if(!$result){
                die('Query failed'.mysqli_error($conexion));
       }

       $jsonissues=array();
       while($row=mysqli_fetch_array($result)){
            $jsonissues[]=array(
                'idvendedor'=>$row['ID'],
                'nombrevendedor'=>$row['Nombre'],
                'descripcionvendedor'=>$row['Descripcion'],
                'imagenvendedor'=>base64_encode($row['Imagen']),
                
       );
       }
      $jasonstring=json_encode($jsonissues);
       echo $jasonstring; 

?>