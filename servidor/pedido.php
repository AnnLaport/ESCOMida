<?php
    /*
        Esta página es exclusiva de un alumno que se haya autentificado por medio del login. Un acceso directo a ésta deberá de ser rechazado. Aquí aparecen las sesiones en escena para cuidar este 'detalle'.
    */

    session_start();
    if(isset($_SESSION["idcliente"])){
        
        $temp = $_REQUEST["idseller"];
        $cliente= $_SESSION["idcliente"];
        date_default_timezone_set('America/Mexico_City');
        $hora=date("H:i:s");

        include("./conexion.php");
    
        $sqlInfBoleta = "SELECT * FROM vendedor WHERE ID = '$temp'";
        $resInfBoleta = mysqli_query($conexion, $sqlInfBoleta);
        $infInfBoleta = mysqli_fetch_row($resInfBoleta);
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
   
   
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="../plugins/validetta/validetta.min.css" rel="stylesheet">
     <link href="../plugins/confirm/jquery-confirm.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
     <script src="../plugins/validetta/validetta.min.js"></script>
     <script src="../plugins/validetta/validettaLang-es-ES.js"></script>
     <script src="../plugins/confirm/jquery-confirm.min.js"></script>
     <script src="../js/sesion.js"></script>
     <link href="../css/tabla.css" rel="stylesheet">
       

    <title>Hacer Pedido</title>
</head>
<body>
    <nav class="grey darken-1">
        <div class="nav-wrapper">
             <div class="container">
                 <a href="../index.php" class="brand-logo">ESCOMida</a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                       <li><a href="perfil.php">Perfil</a></li>
                       <li><a href="#">Nosotros</a></li>
                       <li><a href="cerrarSesion.php?nombreSesion=idcliente">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <br><br>
    
  <div class="container">
  <form id="formPedido" autocomplete="off">
            <div class="row">
            <div class="col s12 m12">
                 <h6>Vendedor al cual le llegará tu pedido: </h6>
            </div>
            <div class="col s12 m4 input-field">
                    <i class="fas fa-user prefix blue-text"></i>
                    <label for="idvendedor">ID Vendedor</label>
                 <input type="text" id="vdestinatario" value="<?php echo $temp; ?>" disabled>
            </div>
            <div class="col s12 m4 input-field">
                    <i class="fas fa-user prefix blue-text"></i>
                    <label for="nvendedor">Nombre del Vendedor</label>
                 <input type="text" id="nvendedor" value="<?php echo  $infInfBoleta[1]; ?>" disabled>
            </div>
            <div class="col s12 m4">
             <a href="perfilvfromcostumer.php?numID=<?php echo $temp; ?>" class="btn btn-large red waves-effect waves-light">Ver perfil</a>
            </div>
            <div class="col s12 m12 input-field">
                    <i class="fas fa-candy-cane prefix blue-text"></i>
                    <label for="desvendedor">Descripción</label>
                 <input type="text" id="desvendedor" value="<?php echo $infInfBoleta[4]; ?>" disabled>
            </div>
            <div class="col s12 m12 input-field">
                    <button type="submit" class="btn red lighten-1" id="bringProducts" style="width: 100%;">Mostrar lista de productos</button>
                </div>
  </form>
               

            <table class="striped">
                <thead>
                   <tr>
                       <th>Nombre de producto</th>
                       <th>Precio</th>
                   </tr>

                </thead>
                <tbody id="productos">

                </tbody>
                
            </table>
            <hr size="1px" color="#B0C4DE " />


            <div class="col s12 m12">
                  <h6>Llene los campos para realizar su pedido: </h6>
            </div>
           

            
        <form id="formPedir" autocomplete="off">
            <div class="row">
            <div class="col s12 m12">
            </div>
            <div class="col s12 m4 input-field">
                    <i class="fas fa-user prefix blue-text"></i>
                    <label for="idcliente">ID Vendedor</label>
                 <input type="text" id="vdestinatario" name="vdestinatario" value="<?php echo $temp; ?>" disabled>
            </div>
            <div class="col s12 m4 input-field">
                    <i class="fas fa-user prefix blue-text"></i>
                    <label for="idcliente">ID Cliente</label>
                 <input type="text" id="cemisario" name="cemisario" value="<?php echo $cliente; ?>" disabled>
            </div>
            <div class="col s12 m4 input-field">
                    <i class="far fa-clock prefix blue-text"></i>
                    <label for="horapedido">Hora Pedido</label>
                 <input type="text" id="horap" name="horap" value="<?php echo $hora; ?>" disabled>
            </div>
            <div class="col s12 m4 input-field">
                    <i class="fas fa-candy-cane prefix blue-text"></i>
                    <label for="salon">Salón</label>
                 <input type="text" id="salonp" name="salonp">
            </div>
            <div class="col s12 m12 input-field">
                    <i class="fas fa-candy-cane prefix blue-text"></i>
                    <label for="idcliente">Descripción</label>
                 <input type="text" id="descripcionp" name="descripcionp">
            </div>
            
            <div class="col s12 m12 input-field">
                    <input type="submit" id="EnviarPedido" class="btn red lighten-1" value="Enviar Pedido" style="width: 100%;">            
            </div>
  </form>
               
            </div>
            
</div>

     
</body>
</html>
<?php
    }else{
        //NO se detectó la sesion que hubo de generarse después de pasar por el login, entonces es un intento de acceso no autorizado, lo redireccionamos a la pantalla correspondiente
        header("location:./../index.php");
    }
?>