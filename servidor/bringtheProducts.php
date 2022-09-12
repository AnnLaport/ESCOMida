<?php

    include('./conexion.php');

    if(isset($_POST['search'])){


        $vendedor=$_POST['search'];
        $query="SELECT * from producto WHERE ID='$vendedor'";
        $result=mysqli_query($conexion,$query);

        if(!$result){
            die('Query failed'.mysqli_error($conexion));
        }
        
        $jsonissues=array();
        while($row=mysqli_fetch_array($result)){
             $jsonissues[]=array(
                 'nproducto'=>$row['Nombre_Producto'],
                 'precio'=>$row['Precio'],
                 
             );
        }
       $jasonstring=json_encode($jsonissues);
       echo $jasonstring; 
    }
     

   

?>