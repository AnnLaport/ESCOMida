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
       

    <title>Registro</title>
</head>
<body>
    <nav class="grey darken-1">
        <div class="nav-wrapper">
             <div class="container">
                 <a href="../index.php" class="brand-logo">ESCOMida</a>
                 <ul id="nav-mobile" class="right hide-on-med-and-down">
                       <li><a href="#">Iniciar Sesión</a></li>
                       <li><a href="registro.php">Registrate</a></li>
                       <li><a href="#">Nosotros</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <br><br>
    
  <div class="container">
      <h4>Llene el formulario con la información que se solicita:</h4>
      <br>
      <form id="formRegistro" autocomplete="on">


      <p>Si se va a registrar como vendedor, deje la caja sin seleccionar</p>
      <p>Si eres cliente, en la descripción solo escriba "cliente"</p>
      <label>
        <input type="checkbox" id="corv"/>
        <span>Soy un cliente</span>
        <br>

      </label>
          <input type="text" id="username" placeholder="Nombre de usuario" name="nombre_vendedor" maxlength="20" data-validetta="required,minLength[3],maxLength[20]">
          <input type="text" id="patname" placeholder="Apellido Paterno" name="nombre_vendedor" maxlength="20" data-validetta="required,minLength[3],maxLength[20]">
          <input type="text" id="motname" placeholder="Apellido Materno" name="nombre_vendedor" maxlength="20" data-validetta="required,minLength[3],maxLength[20]">
         
          <input type="text" id="phone" placeholder="Teléfono" name="telefono_vendedor" maxlength="15" data-validetta="required,number,minLength[8],maxLength[15]">
          <input type="text" id="email" placeholder="Correo Electrónico" name="email_vendedor" maxlength="30" data-validetta="required,email,minLength[8],maxLength[30]">
          <input type="text" id="description" placeholder="Descripción (Productos que vendes)" name="descripcion_vendedor" maxlength="100" data-validetta="required,maxLength[100]">
          <input type="password" id="password" placeholder="Contraseña" name="contrasena_vendedor"  data-validetta="required,minLength[8],maxLength[20]">
          <input type="password" id="rpassword" placeholder="Repetir Contraseña" name="repetir_contrasena" data-validetta="required,minLength[8],maxLength[20]">
          <br><br>
          <p>Al enviar su información, deberá esperar nuestro correo de confirmación para poder usar su cuenta libremente</p>
          <button class="waves-effect grey darken-1 btn" type="submit"><i class="far fa-share-square"></i> Enviar</button>
         
      </form>
 </div>

     
</body>
</html>