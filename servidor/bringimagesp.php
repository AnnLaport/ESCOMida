<?php 

    include('conexion.php');

    if(isset($_POST['idvend'])){

        $idvend=$_POST['idvend'];

        $bringi="SELECT IMGProducto FROM producto WHERE ID='$idvend'";
        $result=mysqli_query($conexion,$bringi);

        if(!$result){
             die('Query failed'.mysqli_error($conexion));
        }

        $jsonissues=array();
        while($row=mysqli_fetch_array($result)){
             $jsonissues[]=array(
                 'imgvendedor'=>base64_encode($row['IMGProducto']), 
        );
        }
       $jasonstring=json_encode($jsonissues);
        echo $jasonstring; 
 
    }

    