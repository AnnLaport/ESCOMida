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
       

    <title>Lista de productos</title>
</head>
<body>
    <nav class="grey darken-1">
        <div class="nav-wrapper">
             <div class="container">
                 <a href="index.html" class="brand-logo">ESCOMida</a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                       <li><a href="#">Nosotros</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <br><br>
<div class="container">
  <h4>Lista de productos</h4>
    <br>
  <div class="imagen_productos" style= " overflow-y: scroll; height:300px; width:900px; " >
      
     <?php
     session_start();

     if(isset($_SESSION["idvendedor"]))
     {

        include 'conexion.php';

        $ID = $_SESSION["idvendedor"];

        $consulta = "SELECT vendedor.nombre, producto.Nombre_Producto, producto.url, producto.Precio 
        FROM vendedor JOIN producto 
        ON vendedor.ID = $ID";

        $datos = mysqli_query($conexion,$consulta);

        while( $fila= mysqli_fetch_array ($datos) )
        {
          $imagen = $fila["url"];
          echo " <img width=100 height=100 src =images/".$imagen."></img>   " ;
        }  
   
 }else
  {
     header("location:./../index.php");
  }
    

     ?>
              


    </div>
	<h4>Agregar productos</h4>
    <div class="form_productos">
	<form id="acciones_productos" action="agregarProducto.php" method="post">
		<img src="../images/selective-focus-photography-of-candy-dispenser-1479192.jpg" width="200" height="200" alt=""/><br>
		<input type="file" name="imagen_producto" accept="image/x-png,image/jpeg" id="url" placeholder="Imagen del producto" name="nombre_producto" maxlength="50" data-validetta="required,minLength[3],maxLength[50]">
	
		<input type="text" id="Nombrep" placeholder="Nombre del producto" name="nombre_producto" maxlength="50" data-validetta="required,minLength[3],maxLength[50]">

		<input type="number" min="0" id="Precio" placeholder="Precio producto($)" name="precio_producto" maxlength="6" data-validetta="required,minLength[1],maxLength[6]">

		<textarea id="descripcion" placeholder="Descripción del producto" name="descripcion_producto" maxlength="100" data-validetta="required,minLength[0],maxLength[100]"></textarea>
    
        
    <button name="Enviar" class="waves-effect grey darken-1 btn" type="submit"><i class="far fa-share-square"></i>Agregar</button>
    </form>
    </div>
    
</div>



</body>

</hmtl>
