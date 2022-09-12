<?php

include('./conexion.php');

$jasonreg=[];

if(isset($_POST['nombre'])){

  $nombre_vendedor=$_POST['nombre'];
 $telefono_vendedor=$_POST['telefono'];
 $email_vendedor=$_POST['correo'];
 $appaterno=$_POST['patname'];
$apmaterno=$_POST['motname'];
$descripcion_vendedor=$_POST['description'];
$contrasena_vendedor=$_POST['contrasena'];
$repetir_contrasena_v=$_POST['repcontrasena'];
$cbxcorv=$_POST['clientorvend'];
$estado_vendedor='0';
$vendedor_aceptado='0';
 
  $sql1 = "SELECT * FROM vendedor WHERE Correo = '$email_vendedor'";
  $res1 = mysqli_query($conexion, $sql1);
  //Nuestro modelo, si está bien hecho, debe contener solo un registro con la combinación boleta-contrasena, en caso contrario habrá que reclamar al profesor de BD
  $inf1= mysqli_num_rows($res1);

  if($inf1==1){
        $jasonreg["val"]=0;
        $jasonreg["msj"]="<h3>Ese correo ya esta registrado</h3>";
        echo json_encode($jasonreg);
    die(0); 
  

  }else{
    if($repetir_contrasena_v==$contrasena_vendedor){
      
       if($cbxcorv=='false'){
        $insertar_vendedor= "INSERT INTO vendedor(Nombre,Telefono,Correo,Descripcion,Estado,Contrasena,Aceptado)VALUES('$nombre_vendedor','$telefono_vendedor','$email_vendedor','$descripcion_vendedor','$estado_vendedor','$contrasena_vendedor','$vendedor_aceptado')";
        $resultado=mysqli_query($conexion,$insertar_vendedor);

        if(!$resultado){
                
          die('Error.');
         
        }
        $jasonreg["val"]=1;
        $jasonreg["msj"]="<h3>Datos enviados correctamente</h3>";
        echo json_encode($jasonreg);
       }else{
        $insertar_vendedor= "INSERT INTO cliente(NOMBRE,A_PATERNOC,A_MATERNOC,CORREOC,CONTRASENAC)VALUES('$nombre_vendedor','$appaterno','$apmaterno','$email_vendedor','$contrasena_vendedor')";
        $resultado=mysqli_query($conexion,$insertar_vendedor);

        if(!$resultado){
                
          die('Error.');
         
        }
        $jasonreg["val"]=1;
        $jasonreg["msj"]="<h3>Datos enviados correctamente</h3>";
        echo json_encode($jasonreg);

       }
       
        

       }else{
        $jasonreg["val"]=0;
        $jasonreg["msj"]="<h3>Las contrasenas no coinciden</h3>";
        echo json_encode($jasonreg);
       }
      
      
    }
    
}
        

      
       

      

      

 