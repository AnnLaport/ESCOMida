<?php

     session_start();
    
    if(isset($_SESSION["idcliente"]))
    {

     include 'conexion.php';

     $ID = $_SESSION["idcliente"];

     /* $nombre =  $_POST["Nombre"];
     $descripcion = $_POST["Descripcion"];

     $consulta = "UPDATE vendedor
     SET Nombre = '$nombre', Descripcion = '$descripcion'
     WHERE ID = $ID"; 


     $datos = mysqli_query($conexion,$consulta);

     
     echo "DATOS ACTUALIZADOS"; */
    
    
   
 ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet"> 
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="../plugins/validetta/validetta.min.css" rel="stylesheet">
     <link href="../plugins/confirm/jquery-confirm.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
     <script src="../plugins/validetta/validetta.min.js"></script>
     <script src="../plugins/validetta/validettaLang-es-ES.js"></script>
     <script src="../plugins/confirm/jquery-confirm.min.js"></script>
     <script src="../js/registro.js"></script>
       

    <title>Perfil</title>
</head>
<body>

 

<?php

    

     //$ID = $_GET["ID"];

     $consulta= "SELECT * FROM cliente where ID_CLIENTE = $ID"; 

     $datos = mysqli_query($conexion,$consulta);

     $fila= mysqli_fetch_array ($datos);

     $nombre = $fila["NOMBRE"];

     /* $imagen = $fila["Imagen"]; */

   
 ?>


    <nav class="grey darken-1">
        <div class="nav-wrapper">
             <div class="container">
                 <a href="../index.php" class="brand-logo">ESCOMida</a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                       <li><a href="#">Nosotros</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <br><br>
    
  <div class="container">
      <h4>Perfil</h4>
      <br>
      <form id="formActulizar" autocomplete="on" action="actualizarCliente.php?> "method="post" >

		 <!--  <img src =  width="200" height="200" alt=""/><br>
 -->
          <input  disabled="disabled" type="text" id="username" placeholder= <?php echo $nombre; ?>  name="Nombre" maxlength="20" data-validetta="required,minLength[3],maxLength[20]">
 
		  <br>
          <button name="Enviar" class="waves-effect grey darken-1 btn" type="submit"><i class="far fa-share-square"></i>Actualizar Perfil</button>

      </form>
 </div>

     
</body>
</html
    <?php

    }else{
        header("location:./../index.php");
    }
    ?>
