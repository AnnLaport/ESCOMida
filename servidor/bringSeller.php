<?php

      include('./conexion.php');
      
      if(isset($_POST['idv'])){
            $idvendor=$_POST['idv'];

            $query="SELECT * FROM vendedor WHERE ID='$idvendor'";
            $result=mysqli_query($conexion,$query);

            if(!$result){
                  die('Error in the conexion'. mysqli_error($conexion));
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

      }else{
            echo 'no se recobió ningún archivo';
      }


?>