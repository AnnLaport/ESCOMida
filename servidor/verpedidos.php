<?php
  
  session_start();

  if(isset($_SESSION["idvendedor"])){

	$vendedor= $_SESSION["idvendedor"];

	include("./conexion.php");

	$sqlInfBoleta = "SELECT * FROM vendedor WHERE ID = '$vendedor'";
	$resInfBoleta = mysqli_query($conexion, $sqlInfBoleta);
	$infInfBoleta = mysqli_fetch_row($resInfBoleta);
	$infBoleta = "<h3 class='center-align'>Hola $infInfBoleta[1], ID=$infInfBoleta[0]</h3>";

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
       

    <title>Pedidos</title>
</head>
<body>
    <nav class="grey darken-1">
        <div class="nav-wrapper">
             <div class="container">
                 <a href="../index.php" class="brand-logo">ESCOMida</a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                       <li><a href="#">Perfil</a></li>
                       <li><a href="./verpedidos.php">Pedidos</a></li>
                       <li><a href="#">Nosotros</a></li>
					   <li><a href="cerrarSesion.php?nombreSesion=idvendedor">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <br><br>
	
 
    <div class="container">

	  <div class="row">
            <div class="col s12 m12">
				<?php echo $infBoleta; ?>
			</div>
			<div class="col s12 m12">
				<input type="hidden" value="<?php echo $infInfBoleta[0]; ?>" id="gotid">
            </div>
      <h4>Aquí estan tus pedidos:</h4>
      <br>

		<table width="200" cellspacing="1" cellpadding="3" border="0" bgcolor="#80A93E">
			<tr>
				<td bgcolor="#B7F259"><font size=1 face="verdana, arial, helvetica"><b>Pedidos</b></font></td>
			</tr>
			<tr>
				<td bgcolor="#F5ECB9">

				<table width="95%" cellspacing="1" cellpadding="1" border="0" align="center">
						<td valign=top><font face="verdana, arial, helvetica" size=1></font></td>
						<td><font face="verdana, arial, helvetica" size=1>
						</font></td>
							<thead>
							<tr>
								<th>Descripcion</th>
								<th>Hora</th>
								<th>Salon</th>
								<th>Estado Pedido</th>
								
							</tr>
							</thead>
							<tbody id="clients">

							</tbody>
						
						
				</table>
			</td>	
		</table>
      
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