<?php
     include('./conexion.php');


     $data = file_get_contents('php://input');
     
     $data1 = json_decode($data,true);

     $data2=$data1['idseller'];

     $query="SELECT * FROM vendedor WHERE ID='$data2'";
     $query1=mysqli_query($conexion,$query);
     $info=mysqli_num_rows($query1);

     if($info!=1){
          die(0);
     }

     $jsonissues=array();
     while($row=mysqli_fetch_array($query1)){
          $jsonissues[]=array(
              'idvendedor'=>$row['ID'],
              'nombrevendedor'=>$row['Nombre'],
              'descripcionvendedor'=>$row['Descripcion'],
              
     );
     }

     echo json_encode($jsonissues);
    
     

     

?>