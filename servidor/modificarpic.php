<?php

      include('./conexion.php');

      $json=[];

      if(isset($_POST['idv2'])){
          $idvendor=$_POST['idv2'];
          $imgvendor=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

          $query="UPDATE vendedor SET Imagen='$imgvendor' WHERE ID='$idvendor'";
          $result=mysqli_query($conexion,$query);

          if(!$result){
             $json['val']=0;
             echo json_encode($json);
              die('Error'.mysqli_error($conexion));
          }
          $json['val']=1;
          echo json_encode($json);
      }
      else{
          echo 'no hay datos';
      }

?>